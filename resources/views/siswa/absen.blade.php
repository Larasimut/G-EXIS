<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Ekskul </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

    </style>
</head>
<body>
  <link rel="stylesheet" href="{{ asset('css/absen.css') }}">

@include('layouts.sidebar')


<div class="sidebar-overlay" id="sidebarOverlay"></div>

<div class="container py-5">


    <div class="banner text-center mb-5">
        <h2 class="fw-bold"> Absensi Ekskul - {{ Str::title($pendaftar->ekskul) }} </h2>

        <p class="mb-2 fs-5">Tunjukkan keaktifanmu hari ini! 💪</p>
        <small>{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</small>

    </div>
<div class="absen-card mb-5">
    <h4 class="fw-bold text-center mb-4">Isi Absensi</h4>

<table class="table table-bordered mb-4">
    <tr>
        <th>Nama</th>
        <td>{{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <th>Ekskul</th>
        <td>{{ Str::title($pendaftar->ekskul) }}</td>
    </tr>
</table>
<form id="absensiForm"
      action="{{ route('siswa.absen.store') }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf

  <input type="hidden" name="user_id" value="{{ Auth::id() }}">
<input type="hidden" name="nama" value="{{ Auth::user()->name }}">
<input type="hidden" name="ekskul" value="{{ $pendaftar->ekskul }}">



        <label class="form-label mb-3 d-block">Status Kehadiran:</label>
        <div class="radio-group">
            <div class="radio-option">
                <input type="radio" name="kehadiran" id="hadir" value="hadir">
                <label for="hadir" class="radio-label">
                    <i class="bi bi-check-circle-fill"></i> Hadir
                </label>
            </div>

            <div class="radio-option">
                <input type="radio" name="kehadiran" id="izin" value="izin">
                <label for="izin" class="radio-label">
                    <i class="bi bi-exclamation-triangle-fill"></i> Izin
                </label>
            </div>

            <div class="radio-option">
                <input type="radio" name="kehadiran" id="sakit" value="sakit">
                <label for="sakit" class="radio-label">
                    <i class="bi bi-thermometer-half"></i> Sakit
                </label>
            </div>
        </div>
]
        <label class="form-label mb-2 mt-3">Keterangan (opsional):</label>
        <textarea class="form-control mb-4" name="keterangan" rows="3"
                  placeholder="Tulis alasan jika izin/sakit..."></textarea>
<input type="hidden" name="pendaftar_id" value="{{ $pendaftar->id }}">


        <div class="text-center mb-4">
            <button type="button" class="btn btn-camera" id="startCamera">
                <i class="bi bi-camera-fill"></i> Scan Wajah (Kamera)
            </button>
        </div>

        <video id="cameraFeed" autoplay style="display:none; width:100%; max-width:350px;"></video>

        <div class="text-center mt-3">
            <button type="button" class="btn btn-primary" id="capturePhoto" style="display:none;">
                <i class="bi bi-camera"></i> Ambil Foto
            </button>
        </div>

        <img id="previewPhoto" style="display:none; width:100%; max-width:350px; border-radius:16px; margin-top:20px; box-shadow:0 4px 12px rgba(0,0,0,0.2);">

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 py-2">Kirim Absensi</button>
        </div>

    </form>
</div>

<script>
let camera = document.getElementById("cameraFeed");
let captureButton = document.getElementById("capturePhoto");
let previewPhoto = document.getElementById("previewPhoto");
let streamActive = false;
let fotoBase64 = null;


document.getElementById("startCamera").addEventListener("click", async () => {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true });
        camera.srcObject = stream;
        camera.style.display = "block";
        captureButton.style.display = "inline-block";
        streamActive = true;
    } catch (error) {
        alert("Tidak bisa mengakses kamera!");
    }
});


captureButton.addEventListener("click", () => {
    const canvas = document.createElement("canvas");
    canvas.width = camera.videoWidth;
    canvas.height = camera.videoHeight;
    canvas.getContext("2d").drawImage(camera, 0, 0);

    fotoBase64 = canvas.toDataURL("image/png");
    previewPhoto.src = fotoBase64;
    previewPhoto.style.display = "block";


    camera.style.display = "none";
});


document.getElementById("absensiForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const formData = new FormData(this);


    if (fotoBase64) {
        formData.append("foto", fotoBase64);
    }

    try {
        const response = await fetch("{{ route('siswa.absen.store') }}", {


            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        });

        const raw = await response.clone().text();
        console.log("RAW RESPONSE:", raw);

        if (!response.ok) {
            alert("Gagal mengirim absensi!");
            return;
        }

        const result = await response.json();
        console.log("SERVER RESPONSE:", result);

        if (result.status === "success") {
            alert("Absensi berhasil!");
            location.reload();
        }

    } catch (error) {
        console.error("CLIENT ERROR:", error);
        alert("Error saat mengirim absensi!");
    }
});

</script>

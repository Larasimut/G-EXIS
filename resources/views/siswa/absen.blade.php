<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Absensi Ekskul – Paskibra</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #eaf4ff;
        font-family: "Poppins", sans-serif;
    }
    .banner {
        background: linear-gradient(135deg,#0b5f9a,#3fb2ff);
        border-radius: 20px;
        padding: 40px 30px;
        color: white;
    }
    .absen-card {
        background: white;
        border-radius: 18px;
        padding: 30px;
        box-shadow: 0 8px 18px rgba(0,0,0,.08);
    }
    .btn-camera {
        background: #006ec9;
        color: white;
        font-weight: 600;
        border-radius: 10px;
        padding: 12px 22px;
    }
    .btn-camera:hover {
        background: #005aa7;
    }
    video {
        width: 100%;
        border-radius: 12px;
        display: none;
    }
    .timeline {
        border-left: 4px solid #0b5f9a;
        margin-left: 12px;
        padding-left: 22px;
    }
    .timeline-box {
        background: white;
        border-radius: 12px;
        padding: 18px;
        margin-bottom: 20px;
        box-shadow: 0 6px 14px rgba(0,0,0,.06);
        position: relative;
    }
    .timeline-box::before {
        content: "";
        width: 14px;
        height: 14px;
        background: #0b5f9a;
        border-radius: 50%;
        position: absolute;
        left: -31px;
        top: 15px;
    }
</style>
</head>
<body>

<div class="container py-5">

    <!-- BANNER -->
    <div class="banner text-center mb-5">
        <h2 class="fw-bold">Absensi Ekskul Paskibra</h2>
        <p class="mb-0 fs-5">Tunjukkan keaktifanmu hari ini! 💪</p>
        <small>Senin, 3 Februari 2025</small>
    </div>

    <!-- ABSENSI -->
    <div class="absen-card mb-5">
        <h4 class="fw-bold text-center mb-4">Isi Absensi</h4>

        <form>
            <label class="fw-bold mb-2 d-block">Status Kehadiran:</label>
            <div class="d-flex gap-4 mb-4">
                <label><input type="radio" name="kehadiran"> Hadir</label>
                <label><input type="radio" name="kehadiran"> Izin</label>
                <label><input type="radio" name="kehadiran"> Sakit</label>
            </div>

            <label class="fw-bold mb-2">Keterangan (opsional):</label>
            <textarea class="form-control mb-4" rows="3" placeholder="Tulis alasan jika izin/sakit..."></textarea>

            <!-- Kamera -->
            <div class="text-center mb-4">
                <button type="button" class="btn btn-camera" id="startCamera">📷 Scan Wajah (Kamera)</button>
            </div>

            <video id="cameraFeed" autoplay></video>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 py-2" style="border-radius:10px;">Kirim Absensi</button>
            </div>
        </form>
    </div>

    <!-- RIWAYAT -->
    <h4 class="fw-bold mb-3">Riwayat Absensi</h4>
    <div class="timeline">

        <div class="timeline-box">
            <b>31 Januari 2025</b> — <span class="text-success">Hadir</span>
            <div class="small text-muted">Tepat waktu</div>
        </div>

        <div class="timeline-box">
            <b>24 Januari 2025</b> — <span class="text-warning">Izin</span>
            <div class="small text-muted">Kegiatan keluarga</div>
        </div>

        <div class="timeline-box">
            <b>17 Januari 2025</b> — <span class="text-danger">Sakit</span>
            <div class="small text-muted">Demam</div>
        </div>
    </div>

</div>

<script>
document.getElementById("startCamera").addEventListener("click", function () {
    const video = document.getElementById("cameraFeed");
    video.style.display = "block";
    navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => video.srcObject = stream)
    .catch(err => alert("Kamera tidak dapat diakses"));
});
</script>

</body>
</html>

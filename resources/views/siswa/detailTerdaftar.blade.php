<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekskul Terdaftar – Paskibra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5faff;
            font-family: "Poppins", sans-serif;
        }
        .header-card {
            background: linear-gradient(135deg, #005aa7, #33b1ff);
            color: white;
            border-radius: 18px;
            padding: 25px;
        }
        .menu-box {
            border-radius: 16px;
            background: white;
            padding: 25px;
            box-shadow: 0 6px 14px rgba(0,0,0,.08);
            transition: .3s;
        }
        .menu-box:hover {
            transform: translateY(-4px);
        }
        .menu-box img {
            width: 70px;
            margin-bottom: 12px;
        }
        .btn-blue {
            background: #0074d9;
            color: white;
            border-radius: 10px;
        }
        .btn-blue:hover {
            background: #005fb4;
        }
        .btn-red {
            background: #d63031;
            color: white;
            border-radius: 12px;
            padding: 12px 22px;
            font-size: 17px;
        }
        .btn-red:hover {
            background: #b92425;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- HEADER -->
    <div class="header-card mb-4 text-center">
        <h2 class="fw-bold">Paskibra — Ekskul Terdaftar Kamu</h2>
        <p class="mb-0">Semangat dan tetap aktif dalam kegiatan! 💪</p>
    </div>

    <!-- 3 MENU -->
    <div class="row text-center mb-5">
        <div class="col-md-4 mb-3">
            <div class="menu-box h-100">
                <img src="https://cdn-icons-png.flaticon.com/512/599/599328.png" alt="">
                <h5 class="fw-bold">Absensi</h5>
                <p>Cek & lakukan absensi kehadiran ekskul.</p>
                <a href="{{ route('siswa.absen') }}" class="btn btn-blue px-4">Absen</a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="menu-box h-100">
                <img src="https://cdn-icons-png.flaticon.com/512/3208/3208726.png" alt="">
                <h5 class="fw-bold">Jadwal Latihan</h5>
                <p>Lihat jadwal latihan ekskul lengkap.</p>
               <a href="{{ route('siswa.jadwal') }}" class="btn btn-blue px-4">Lihat Jadwal</a>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="menu-box h-100">
                <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" alt="">
                <h5 class="fw-bold">Sertifikat Keaktifan</h5>
                <p>Download / lihat sertifikat partisipasi ekskul.</p>
<a href="{{ route('siswa.sertifikat') }}" class="btn btn-blue px-4">Lihat Sertifikat</a>
            </div>
        </div>
    </div>

    <!-- BUTTON KELUAR EKSUL -->
    <div class="text-center mt-4">
        <button class="btn btn-red" onclick="return confirm('Apakah kamu yakin ingin keluar dari ekskul ini?')">
            Keluar dari Ekskul
        </button>
    </div>

</div>
</body>
</html>

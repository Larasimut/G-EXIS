<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #E3F1FF;
            font-family: 'Poppins', sans-serif;
        }

        /* Header */
        .notif-header {
            background: #4A76A8;
            padding: 18px 22px;
            border-bottom-left-radius: 35px;
            border-bottom-right-radius: 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
        }

        .notif-title {
            font-size: 22px;
            font-weight: 600;
        }

        /* Burger bar */
        .burger {
            font-size: 25px;
            cursor: pointer;
        }

        /* Notif card */
        .notif-card {
            background: white;
            border-radius: 18px;
            padding: 18px 15px;
            margin: 18px 0;
            box-shadow: 0 5px 12px rgba(0,0,0,0.12);
            display: flex;
            gap: 15px;
            align-items: flex-start;
            cursor: pointer;
            transition: 0.25s;
        }
        .notif-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 18px rgba(0,0,0,0.18);
        }
        .notif-icon {
            background: #4A76A8;
            border-radius: 12px;
            color: white;
            padding: 10px;
            font-size: 18px;
        }
        .notif-time {
            font-size: 13px;
            color: #6c757d;
            margin-top: 4px;
        }

        .alert-info-custom {
            background: #B5D4EB;
            border-radius: 20px;
            padding: 12px 18px;
            margin-top: 7px;
            font-weight: 500;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="notif-header shadow-sm">
    <i class="fa fa-arrow-left burger" onclick="history.back()"></i>
    <span class="notif-title">Notifikasi</span>
    <i class="fa fa-bars burger"></i>
</header>

<div class="container mt-3 mb-4">

    <!-- OPTIONAL: alert info -->
    <div class="alert-info-custom text-center">
        📢 Kamu memiliki <b>3 notifikasi baru</b> — jangan lupa untuk cek semua ya!
    </div>

    <!-- Notifikasi 1 -->
    <div class="notif-card">
        <div class="notif-icon"><i class="fa fa-trophy"></i></div>
        <div>
            <h6 class="fw-bold mb-1">Pengumuman Juara Lomba Futsal</h6>
            <p class="mb-1">Selamat kepada tim futsal G-EXIS yang berhasil meraih juara 1 turnamen antar sekolah!</p>
            <p class="notif-time"><i class="fa fa-clock me-1"></i> 2 jam yang lalu</p>
        </div>
    </div>

    <!-- Notifikasi 2 -->
    <div class="notif-card">
        <div class="notif-icon"><i class="fa fa-calendar"></i></div>
        <div>
            <h6 class="fw-bold mb-1">Jadwal Latihan Ekskul</h6>
            <p class="mb-1">Ekskul Basket akan dimulai kembali Jumat, 29 November 2025 pukul 15.00 di lapangan sekolah.</p>
            <p class="notif-time"><i class="fa fa-clock me-1"></i> Kemarin</p>
        </div>
    </div>

    <!-- Notifikasi 3 -->
    <div class="notif-card">
        <div class="notif-icon"><i class="fa fa-bell"></i></div>
        <div>
            <h6 class="fw-bold mb-1">Informasi Seragam Ekskul</h6>
            <p class="mb-1">Untuk anggota baru ekskul, pengambilan seragam mulai Senin — lokasi di ruang OSIS.</p>
            <p class="notif-time"><i class="fa fa-clock me-1"></i> 3 hari yang lalu</p>
        </div>
    </div>

</div>

</body>
</html>

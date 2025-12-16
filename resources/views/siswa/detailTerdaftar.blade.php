<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekskul Terdaftar – Paskibra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #1e3a8a;
            --secondary-blue: #3b82f6;
            --accent-blue: #60a5fa;
            --light-blue: #dbeafe;
            --soft-blue: #f0f9ff;
            --solid-blue: #3b82f6;
            --green: #10b981;
            --purple: #8b5cf6;
            --orange: #f59e0b;
            --shadow-elegant: 0 10px 30px rgba(30, 58, 138, 0.15);
            --shadow-hover: 0 20px 50px rgba(30, 58, 138, 0.25);
            --glass-bg: rgba(255, 255, 255, 0.9);
            --glass-border: rgba(30, 58, 138, 0.1);
            --danger-red: #ef4444;
            --danger-hover: #dc2626;
        }

        body {
            background: var(--soft-blue);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
            color: #1e293b;
        }

        .header-card {
            background: var(--solid-blue);
            color: white;
            border-radius: 24px;
            padding: 30px;
            box-shadow: var(--shadow-elegant);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s ease-out;
        }

        .header-card h2 {
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .header-card p {
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }

        .menu-box {
            border-radius: 20px;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            padding: 30px;
            box-shadow: var(--shadow-elegant);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid var(--glass-border);
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .menu-box:nth-child(1) { animation-delay: 0.1s; }
        .menu-box:nth-child(2) { animation-delay: 0.2s; }
        .menu-box:nth-child(3) { animation-delay: 0.3s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .menu-box:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .menu-box img {
            width: 80px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .menu-box:hover img {
            transform: scale(1.1);
        }

        .menu-box h5 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .menu-box p {
            color: #64748b;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        /* Variasi warna untuk menu box */
        .menu-box:nth-child(1) h5 {
            color: var(--green);
        }

        .menu-box:nth-child(2) h5 {
            color: var(--purple);
        }

        .menu-box:nth-child(3) h5 {
            color: var(--orange);
        }

        .btn-blue {
            background: var(--solid-blue);
            color: white;
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
            border: none;
        }

        .btn-blue:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }

        .btn-red {
            background: var(--danger-red);
            color: white;
            border-radius: 16px;
            padding: 14px 28px;
            font-size: 18px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-red:hover {
            background: var(--danger-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(239, 68, 68, 0.4);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .header-card {
                padding: 20px;
            }
            .header-card h2 {
                font-size: 1.5rem;
            }
            .menu-box {
                padding: 20px;
            }
            .btn-red {
                font-size: 16px;
                padding: 12px 24px;
            }
        }
    </style>
</head>
<body>
@include('layouts.sidebar')

<div class="container py-5">

    <!-- HEADER -->
    <div class="header-card mb-4 text-center">
<h2 class="fw-bold">{{ Str::title($pendaftar->ekskul) }} — Ekskul Terdaftar Kamu</h2>


<p class="mb-0">Informasi lengkap tentang ekskul ini ✨</p>

        <p class="mb-0">Semangat dan tetap aktif dalam kegiatan! 💪</p>
    </div>

    <!-- 3 MENU -->
    <div class="row text-center mb-5">
        <div class="col-md-4 mb-3">
            <div class="menu-box h-100">
                <img src="https://cdn-icons-png.flaticon.com/512/599/599328.png" alt="">
                <h5 class="fw-bold">Absensi</h5>
                <p>Cek & lakukan absensi kehadiran ekskul.</p>
               <a href="{{ route('siswa.absen', $pendaftar->id) }}" class="btn btn-blue px-4">
    Absen
</a>

            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="menu-box h-100">
                <img src="https://cdn-icons-png.flaticon.com/512/3208/3208726.png" alt="">
                <h5 class="fw-bold">Jadwal Latihan</h5>
                <p>Lihat jadwal latihan ekskul lengkap.</p> <br>
               <a href="{{ route('siswa.jadwal') }}" class="btn btn-blue px-4">Lihat Jadwal</a>
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

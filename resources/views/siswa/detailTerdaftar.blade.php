<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekskul Terdaftar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --blue-soft: #e8f1ff;
            --blue-main: #5b8def;
            --blue-dark: #3b6fd8;
            --blue-light: #f4f8ff;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --card-shadow: 0 10px 26px rgba(0,0,0,.08);
        }

        body {
            background: var(--blue-soft);
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
        }

        /* HEADER */
        .header-box {
            background: linear-gradient(135deg, #6fa8ff, #8fbaff);
            border-radius: 24px;
            padding: 32px 26px;
            text-align: center;
            color: white;
            box-shadow: var(--card-shadow);
        }

        .header-box h3 {
            font-weight: 700;
            margin-bottom: 6px;
        }

        .header-box .subtitle {
            font-size: 14px;
            opacity: .95;
            margin-bottom: 8px;
        }

        .header-box .motivation {
            font-size: 13px;
            opacity: .9;
        }

        /* MENU CARD */
        .menu-card {
            background: white;
            border-radius: 22px;
            padding: 30px 22px;
            box-shadow: var(--card-shadow);
            transition: .3s ease;
            height: 100%;
        }

        .menu-card:hover {
            transform: translateY(-6px);
        }

        .menu-icon {
            width: 66px;
            height: 66px;
            background: var(--blue-light);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            color: var(--blue-main);
            font-size: 26px;
        }

        .menu-card h5 {
            font-weight: 600;
            margin-bottom: 8px;
        }

        .menu-card p {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 22px;
        }

        /* BUTTON */
        .btn-soft {
            background: linear-gradient(135deg, #5b8def, #7aa7ff);
            color: white;
            border-radius: 14px;
            padding: 11px 30px;
            font-weight: 600;
            border: none;
            transition: .3s ease;
            box-shadow: 0 6px 18px rgba(91,141,239,.35);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-soft:hover {
            background: linear-gradient(135deg, #3b6fd8, #5b8def);
            transform: translateY(-2px);
            box-shadow: 0 10px 24px rgba(91,141,239,.45);
        }

        /* EXIT */
        .btn-exit {
            background: linear-gradient(135deg, #fee2e2, #fecaca);
            color: #b91c1c;
            border-radius: 16px;
            padding: 14px 38px;
            font-weight: 600;
            border: none;
            transition: .25s;
        }

        .btn-exit:hover {
            background: linear-gradient(135deg, #fecaca, #fca5a5);
        }
    </style>
</head>
<body>

@include('layouts.sidebar')

<div class="container py-5">

    <!-- HEADER -->
    <div class="header-box mb-5">
        <h3>{{ Str::title($pendaftar->ekskul) }}</h3>
        <div class="subtitle">Ekskul yang sedang kamu ikuti</div>
        <div class="motivation">
            Tetap semangat, disiplin, dan konsisten ya! 💙
        </div>
    </div>

    <!-- MENU -->
    <div class="row justify-content-center g-4 mb-4">

        <!-- ABSENSI -->
        <div class="col-md-5">
            <div class="menu-card text-center">
                <div class="menu-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <h5>Absensi</h5>
                <p>Catat kehadiran kamu dan pastikan tidak terlewat setiap pertemuan.</p>
                <a href="{{ route('siswa.absen', $pendaftar->id) }}" class="btn btn-soft">
                    <i class="fa-solid fa-check"></i> Absen Sekarang
                </a>
            </div>
        </div>

        <!-- JADWAL -->
        <div class="col-md-5">
            <div class="menu-card text-center">
                <div class="menu-icon">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <h5>Jadwal Latihan</h5>
                <p>Lihat jadwal latihan agar kamu selalu siap dan tepat waktu.</p>
                <a href="{{ route('siswa.jadwal') }}" class="btn btn-soft">
                    <i class="fa-solid fa-calendar"></i> Lihat Jadwal
                </a>
            </div>
        </div>

    </div>



</div>

</body>
</html>

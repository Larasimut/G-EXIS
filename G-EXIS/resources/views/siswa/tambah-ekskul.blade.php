<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ekstrakurikuler</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-blue: #4a90e2;
            --secondary-blue: #7cb9e8;
            --accent-blue: #a2d2ff;
            --light-blue: #e0f2fe;
            --soft-blue: #f8fbff;
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-border: rgba(74, 144, 226, 0.1);
            --shadow-elegant: 0 10px 30px rgba(74, 144, 226, 0.15);
            --shadow-hover: 0 20px 50px rgba(74, 144, 226, 0.25);
        }

        body {
            background: var(--soft-blue);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
            color: #1e293b;
            position: relative;
        }

        /* Subtle background pattern */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle at 20% 80%, rgba(74, 144, 226, 0.05) 0%, transparent 50%),
                              radial-gradient(circle at 80% 20%, rgba(162, 210, 255, 0.05) 0%, transparent 50%);
            z-index: -1;
        }

        /* TITLE */
        .eskul-title {
            font-weight: 700;
            font-size: 2.3rem;
            color: var(--primary-blue);
            animation: fadeDown 1s ease;
            text-align: center;
            margin: 20px 0;
        }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* HEADER BUTTONS */
        .header-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-back, .btn-menu {
            width: 50px;
            height: 50px;
            background: var(--glass-bg);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.2);
            transition: all 0.3s ease;
            border: 1px solid var(--glass-border);
        }

        .btn-back:hover, .btn-menu:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.3);
        }

        /* SEARCH */
        .search-box {
            background: var(--glass-bg);
            padding: 12px 20px;
            width: 100%;
            max-width: 400px;
            border-radius: 25px;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            margin: 0 auto 30px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 90%;
            font-size: 0.9rem;
            background: transparent;
        }

        .search-box i {
            color: var(--primary-blue);
        }

        /* CARD */
        .eskul-card {
            background: var(--glass-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
            position: relative;
        }

        .eskul-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .eskul-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .eskul-card:hover .eskul-img {
            transform: scale(1.05);
            filter: brightness(90%);
        }

        /* INFO */
        .eskul-info {
            padding: 20px;
            text-align: center;
        }

        .eskul-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 8px;
        }

        .eskul-desc {
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 15px;
        }

        .eskul-btn-box {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn-view, .btn-join {
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-view {
            background: var(--primary-blue);
            color: white;
        }

        .btn-view:hover {
            background: var(--secondary-blue);
            transform: translateY(-2px);
        }

        .btn-join {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
        }

        .btn-join:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }

        /* SIDEBAR */
        .profile-sidebar {
            position: fixed;
            top: 0;
            right: -320px;
            width: 320px;
            height: 100vh;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            color: #1e293b;
            padding: 40px 30px;
            transition: 0.35s ease;
            z-index: 2000;
            border-left: 1px solid var(--glass-border);
            box-shadow: var(--shadow-elegant);
        }

        .profile-sidebar.active {
            right: 0;
        }

        .profile-picture {
            font-size: 80px;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .menu-item {
            display: block;
            padding: 12px 0;
            font-size: 1rem;
            border-bottom: 1px solid var(--glass-border);
            color: #374151;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .menu-item:hover {
            color: var(--primary-blue);
            transform: translateX(5px);
        }

        .logout-btn {
            display: block;
            margin-top: 25px;
            padding: 12px;
            text-align: center;
            background: #ef4444;
            border-radius: 10px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: #dc2626;
            transform: translateY(-2px);
        }

        #overlaySidebar {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            display: none;
            z-index: 1500;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .eskul-title {
                font-size: 2rem;
            }
            .header-buttons {
                margin-bottom: 15px;
            }
            .search-box {
                max-width: 90%;
            }
            .profile-sidebar {
                width: 280px;
            }
        }
    </style>
</head>

<body>

<!-- OVERLAY -->
<div id="overlaySidebar"></div>

<!-- HEADER -->
<div class="container mt-4">
    <div class="header-buttons">
        <div class="btn-back" onclick="history.back()"><i class="fa fa-arrow-left"></i></div>
        <h2 class="eskul-title">Tambah Ekstrakurikuler</h2>
        <div class="btn-menu"><i class="fa fa-bars"></i></div>
    </div>
</div>

<!-- SEARCH -->
<div class="text-center">
    <div class="search-box d-flex align-items-center">
        <i class="fa fa-search me-2"></i>
        <input type="text" id="search" placeholder="Cari ekstrakulikuler...">
    </div>
</div>

<!-- LIST -->
<div class="container py-4">
    <div class="row g-4" id="eksul-container">

        @php
            $eskulData = [
                ['img'=>'aksara.jpg','nama'=>'Aksara','desc'=>'Belajar menulis dan literasi.'],
                ['img'=>'basket.jpg','nama'=>'Basket','desc'=>'Olahraga penuh strategi.'],
                ['img'=>'coding.jpg','nama'=>'Coding','desc'=>'Belajar pemrograman modern.'],
                ['img'=>'drumband.jpg','nama'=>'Drumband','desc'=>'Instrumen musik kompak.'],
                ['img'=>'english.jpg','nama'=>'English Club','desc'=>'Skill bahasa Inggris.'],
                ['img'=>'futsal.jpg','nama'=>'Futsal','desc'=>'Olahraga teamwork.'],
                ['img'=>'irma.jpg','nama'=>'Irma','desc'=>'Ikatan Remaja Masjid.'],
                ['img'=>'karate.jpg','nama'=>'Karate','desc'=>'Bela diri & disiplin.'],
                ['img'=>'karawitan.jpg','nama'=>'Karawitan','desc'=>'Seni musik Jawa.'],
                ['img'=>'kir.jpg','nama'=>'KIR','desc'=>'Karya Ilmiah Remaja.'],
                ['img'=>'publikasi.jpg','nama'=>'Media Publikasi','desc'=>'Jurnalistik & broadcasting.'],
                ['img'=>'paduansuara.jpg','nama'=>'Paduan Suara','desc'=>'Vokal harmoni.'],
                ['img'=>'paskibra.jpg','nama'=>'Paskibra','desc'=>'Disiplin & upacara.'],
                ['img'=>'pramuka.jpg','nama'=>'Pramuka','desc'=>'Kemandirian & survival.'],
                ['img'=>'silat.jpg','nama'=>'Pencak Silat','desc'=>'Bela diri Indonesia.'],
                ['img'=>'photography.jpg','nama'=>'Photography','desc'=>'Foto & editing.'],
                ['img'=>'pmr.jpg','nama'=>'PMR','desc'=>'Pertolongan pertama.'],
                ['img'=>'senitari.jpg','nama'=>'Seni Tari','desc'=>'Ekspresi seni.'],
                ['img'=>'tataboga.jpg','nama'=>'Tata Boga','desc'=>'Kuliner & memasak.'],
                ['img'=>'rias.jpg','nama'=>'Tata Rias','desc'=>'Make-up & beauty.'],
                ['img'=>'voly.jpg','nama'=>'Voli','desc'=>'Olahraga tim.'],
            ];
        @endphp

        @foreach ($eskulData as $eskul)
        <div class="col-md-4 col-sm-6 ekskul-item">
            <div class="eskul-card">
                <img src="{{ asset('images/' . $eskul['img']) }}" class="eskul-img" alt="{{ $eskul['nama'] }}">
                <div class="eskul-info">
                    <h5 class="eskul-name">{{ $eskul['nama'] }}</h5>
                    <p class="eskul-desc">{{ $eskul['desc'] }}</p>
                    <div class="eskul-btn-box">
                        <a href="#" class="btn-view">Lihat</a>
                        <a href="{{ route('siswa.formpendaftaran') }}" class="btn-join">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

<!-- SIDEBAR -->
<div class="profile-sidebar" id="sidebarProfile">
    <i class="fa fa-times" id="closeSidebar" style="position:absolute; top:25px; right:25px; font-size:24px; cursor:pointer; color:var(--primary-blue);"></i>
    <center>
        <i class="fa fa-user-circle profile-picture"></i>
        <h5 class="fw-bold mb-4" style="color: var(--primary-blue);">Siswa - Mugni Tiarani</h5>
    </center>
    <a href="{{ route('siswa.tambahEkskul') }}" class="menu-item">
        <i class="fa fa-plus-circle"></i> Tambah Ekskul
    </a>
    <a href="{{ route('siswa.ekskulTerdaftar') }}" class="menu-item">
        <i class="fa fa-users"></i> Ekskul Terdaftar
    </a>
    <a href="{{ route('siswa.notifikasi') }}" class="menu-item">
        <i class="fa fa-bell"></i> Notifikasi
    </a>
    <a href="{{ route('logout.confirm') }}" class="logout-btn">LOG OUT</a>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Sidebar toggle
    const sidebar = document.getElementById("sidebarProfile");
    const openBtn = document.querySelector(".btn-menu");
    const closeBtn = document.getElementById("closeSidebar");
    const overlay = document.getElementById("overlaySidebar");

    openBtn.onclick = () => {
        sidebar.classList.add("active");
        overlay.style.display = "block";
    };

    closeBtn.onclick = () => {
        sidebar.classList.remove("active");
        overlay.style.display = "none";
    };

    overlay.onclick = () => {
        sidebar.classList.remove("active");
        overlay.style.display = "none";
    };

    // Search filter
    document.getElementById('search').addEventListener('keyup', function() {
        let keyword = this.value.toLowerCase();
        document.querySelectorAll(".ekskul-item").forEach(item => {
            let text = item.innerText.toLowerCase();
            item.style.display = text.includes(keyword) ? "" : "none";
        });
    });
</script>

</body>
</html>

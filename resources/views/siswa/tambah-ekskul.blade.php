<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>

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
        }

        /* HEADER */
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
            border: 1px solid var(--glass-border);
            transition: 0.3s;
        }

        .btn-back:hover, .btn-menu:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-hover);
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
            background: transparent;
        }

        .search-box i {
            color: var(--primary-blue);
        }

        /* CARD (desain dari halaman Tambah Ekskul) */
        .eskul-card {
            background: var(--glass-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            transition: 0.3s;
        }

        .eskul-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .eskul-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: 0.3s;
        }

        .eskul-card:hover .eskul-img {
            transform: scale(1.05);
            filter: brightness(90%);
        }

        .eskul-info {
            padding: 20px;
            text-align: center;
        }

        .eskul-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 8px;
        }

        .eskul-desc {
            font-size: .9rem;
            color: #6b7280;
            margin-bottom: 15px;
        }

        .eskul-btn-box {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .btn-view {
            background: var(--primary-blue);
            color: white;
            padding: 8px 16px;
            border-radius: 10px;
            font-size: .85rem;
            text-decoration: none;
        }

        .btn-join {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            padding: 8px 16px;
            border-radius: 10px;
            font-size: .85rem;
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
            padding: 40px 30px;
            border-left: 1px solid var(--glass-border);
            transition: 0.35s;
            z-index: 2000;
        }

        .profile-sidebar.active { right: 0; }

        #overlaySidebar {
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            top: 0;
            left: 0;
            display: none;
            z-index: 1500;
        }
    </style>
</head>

<body>

<!-- OVERLAY SIDEBAR -->
<div id="overlaySidebar"></div>

<!-- HEADER -->
<div class="container mt-4">
    <div class="header-buttons">
        <div class="btn-back" onclick="history.back()"><i class="fa fa-arrow-left"></i></div>
        <h2 class="eskul-title">Ekstrakurikuler</h2>
        <div class="btn-menu"><i class="fa fa-bars"></i></div>
    </div>
</div>

<!-- SEARCH -->
<center>
    <div class="search-box d-flex align-items-center">
        <i class="fa fa-search me-2"></i>
        <input type="text" id="search" placeholder="Cari ekstrakurikuler...">
    </div>
</center>

<!-- LIST EKSKUL (Data dari halaman pertama) -->
<div class="container py-4">
    <div class="row g-4" id="eksul-container">

        @php
            use Illuminate\Pagination\LengthAwarePaginator;

            $eskulList = [
                ['img'=>'akara.jpg','nama'=>'Aksara','desc'=>'Ekstrakurikuler yang mengasah kemampuan menulis...'],
                ['img'=>'basket.jpg','nama'=>'Basket','desc'=>'Permainan olahraga teamwork...'],
                ['img'=>'coding.jpg','nama'=>'Coding','desc'=>'Belajar pemrograman modern...'],
                ['img'=>'drumband.jpg','nama'=>'Drumband','desc'=>'Ekskul musik ritmis...'],
                ['img'=>'english club.jpg','nama'=>'English Club','desc'=>'Meningkatkan kemampuan speaking...'],
                ['img'=>'futsall.jpg','nama'=>'Futsal','desc'=>'Olahraga cepat dan intens...'],
                ['img'=>'irmah.jpg','nama'=>'Irma','desc'=>'Ikatan Remaja Masjid...'],
                ['img'=>'karate.jpg','nama'=>'Karate','desc'=>'Seni bela diri...'],
                ['img'=>'karawitan.jpg','nama'=>'Karawitan','desc'=>'Musik tradisional Jawa...'],
                ['img'=>'kir.jpg','nama'=>'KIR','desc'=>'Karya Ilmiah Remaja...'],
                ['img'=>'media.jpg','nama'=>'Media Publikasi','desc'=>'Jurnalistik & broadcasting...'],
                ['img'=>'padus.jpg','nama'=>'Paduan Suara','desc'=>'Kegiatan vokal harmoni...'],
                ['img'=>'paskib.jpg','nama'=>'Paskibra','desc'=>'Kedisiplinan & nasionalisme...'],
                ['img'=>'pramuka.jpg','nama'=>'Pramuka','desc'=>'Kemandirian & survival...'],
                ['img'=>'silat.jpg','nama'=>'Pencak Silat','desc'=>'Bela diri Indonesia...'],
                ['img'=>'photograhpy.jpg','nama'=>'Photography','desc'=>'Fotografi & editing...'],
                ['img'=>'pmr.jpg','nama'=>'PMR','desc'=>'Pertolongan pertama...'],
                ['img'=>'tari.jpg','nama'=>'Seni Tari','desc'=>'Ekspresi budaya...'],
                ['img'=>'tataboga.jpg','nama'=>'Tata Boga','desc'=>'Kuliner & memasak...'],
                ['img'=>'tatarias.jpg','nama'=>'Tata Rias','desc'=>'Make-up & beauty...'],
                ['img'=>'voli.jpg','nama'=>'Voli','desc'=>'Olahraga tim...'],
            ];

            $perPage = 6;
            $page = request()->get('page', 1);
            $collection = collect($eskulList);

            $paged = new LengthAwarePaginator(
                $collection->slice(($page - 1) * $perPage, $perPage)->values(),
                $collection->count(),
                $perPage,
                $page,
                ['path' => url()->current()]
            );
        @endphp

        @foreach ($paged as $eskul)
        <div class="col-md-4 col-sm-6 ekskul-item">
            <div class="eskul-card">
                <img src="{{ asset('images/' . $eskul['img']) }}" class="eskul-img">
                <div class="eskul-info">
                    <h5 class="eskul-name">{{ $eskul['nama'] }}</h5>
                    <p class="eskul-desc">{{ $eskul['desc'] }}</p>
                    <div class="eskul-btn-box">
                        <a href="{{ route('siswa.lihatekskul') }}?id={{ $loop->index }}" class="btn-view">Lihat</a>
                        <a href="{{ route('siswa.formpendaftaran') }}" class="btn-join">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $paged->links('pagination::bootstrap-5') }}
    </div>
</div>

<!-- SIDEBAR -->
<div class="profile-sidebar" id="sidebarProfile">
    <i class="fa fa-times" id="closeSidebar" style="position:absolute; top:25px; right:25px; font-size:24px; cursor:pointer;"></i>
    <center>
        <i class="fa fa-user-circle" style="font-size:80px; color:var(--primary-blue);"></i>
        <h5 class="fw-bold mt-3">Siswa - Mugni Tiarani</h5>
    </center>

    <a href="{{ route('siswa.tambahEkskul') }}" class="menu-item">Tambah Ekskul</a>
    <a href="{{ route('siswa.ekskulTerdaftar') }}" class="menu-item">Ekskul Terdaftar</a>
    <a href="{{ route('siswa.notifikasi') }}" class="menu-item">Notifikasi</a>
    <a href="{{ route('logout.confirm') }}" class="logout-btn">LOG OUT</a>
</div>

<script>
    const sidebar = document.getElementById("sidebarProfile");
    const openBtn = document.querySelector(".btn-menu");
    const closeBtn = document.getElementById("closeSidebar");
    const overlay = document.getElementById("overlaySidebar");

    openBtn.onclick = () => { sidebar.classList.add("active"); overlay.style.display = "block"; };
    closeBtn.onclick = () => { sidebar.classList.remove("active"); overlay.style.display = "none"; };
    overlay.onclick = () => { sidebar.classList.remove("active"); overlay.style.display = "none"; };

    // SEARCH FILTER
    document.getElementById('search').addEventListener('input', function(){
        let q = this.value.toLowerCase();
        document.querySelectorAll('.ekskul-item').forEach(item => {
            const title = item.querySelector('.eskul-name').innerText.toLowerCase();
            const desc = item.querySelector('.eskul-desc').innerText.toLowerCase();
            item.style.display = title.includes(q) || desc.includes(q) ? "block" : "none";
        });
    });
</script>

</body>
</html>

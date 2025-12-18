<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Pembina" }} - G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #e3f2fa;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* ================= SIDEBAR DESKTOP ================= */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: linear-gradient(180deg, #0b3052 0%, #08263f 100%);
            color: white;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            animation: fadeIn .5s ease-in-out;
            z-index: 999;
            box-shadow: 4px 0 12px rgba(0,0,0,0.25);
            border-radius: 0 20px 20px 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateX(-15px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            margin: 4px 12px;
            color: white;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.25s;
            font-size: 15px;
            gap: 10px;
            opacity: 0.95;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.12);
            box-shadow: inset 0 0 6px rgba(255, 255, 255, 0.25);
            transform: translateX(6px);
        }

        @media (max-width: 992px) {
            .sidebar { display: none; }
        }

        /* ================= MAIN CONTENT ================= */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        @media (max-width: 992px) {
            .main-content { margin-left: 0 !important; }
        }

        /* ================= TOPBAR ================= */
        .topbar {
            background: #0b3052;
            padding: 15px 20px;
            border-radius: 30px; /* lebih bulat */
            color: white;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.25);
        }

        .logo-img {
            height: 45px;
            width: auto;
        }

        .logo-text {
            margin-left: -10px; /* lebih rapat ke logo */
            font-size: 22px;
            font-weight: 600;
            color: #065084; /* samakan warna dengan logo */
        }

        .menu-btn {
            display: none;
            font-size: 30px;
            cursor: pointer;
        }

        @media (max-width: 992px) {
            .menu-btn { display: block; }
        }

        /* ================= SEARCH INPUT ================= */
        .search-group {
            position: relative;
            width: 200px;
        }

        .search-group input {
            padding-left: 35px;
            background: white;
            border: none;
            border-radius: 12px;
            box-shadow: inset 0 0 8px rgba(0,0,0,.12);
            transition: .25s;
        }

        .search-group input:focus {
            box-shadow: 0 0 0 3px rgba(255,255,255,.4);
        }

        .search-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #707b8c;
            font-size: 17px;
        }

        /* ================= OFFCANVAS MOBILE ================= */
        .offcanvas {
            background: linear-gradient(180deg, #0b3052 0%, #08263f 100%) !important;
            box-shadow: 4px 0 12px rgba(0, 0, 0, 0.35);
        }

        .offcanvas a {
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            margin-bottom: 5px;
            transition: 0.25s;
            opacity: 0.95;
        }

        .offcanvas a:hover,
        .offcanvas a.active {
            background: rgba(255,255,255,0.12);
            box-shadow: inset 0 0 6px rgba(255,255,255,0.25);
            transform: translateX(6px);
        }

        /* ================= PROFILE DROPDOWN ================= */
        @keyframes dropdownFade {
            0% { opacity: 0; transform: translateY(-5px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .profile-dropdown {
            background: #0b3052;
            border-radius: 16px;
            border: none;
            padding: 12px;
            min-width: 240px;
            color: white;
            box-shadow: 0px 6px 16px rgba(0,0,0,0.35);
            animation: dropdownFade .25s ease-out;
        }

        .profile-dropdown .dropdown-item {
            color: white;
            border-radius: 8px;
            margin-bottom: 5px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .profile-dropdown .dropdown-item:hover {
            background: rgba(255,255,255,0.15);
        }

        .profile-icon {
            font-size: 36px;
            cursor: pointer;
            transition: .2s ease;
        }

        .profile-icon:hover { transform: scale(1.1); }

        @media (max-width: 768px) {
            .profile-icon { font-size: 30px; }
            .profile-dropdown { min-width: 200px; right: 10px !important; border-radius: 14px; padding: 10px; }
            .profile-dropdown .dropdown-item { font-size: 13px; padding: 8px; }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR MOBILE -->
    <div class="text-white offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
        <div class="offcanvas-header">
            <h5 class="fw-bold">Pembina G-EXIS</h5>
            <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <a class="{{ request()->is('pembina/beranda') ? 'active' : '' }}" href="{{ route('pembina.beranda') }}"><i class="bi bi-house-door"></i> Beranda</a>
        <a class="{{ request()->is('pembina/konfirmasi') ? 'active' : '' }}" href="{{ route('pembina.konfirmasi') }}"><i class="bi bi-clipboard-check"></i> Kelola Siswa</a>
        <a class="{{ request()->is('pembina/absen') ? 'active' : '' }}" href="{{ route('pembina.absen') }}"><i class="bi bi-people"></i> Absen Siswa</a>
        <a class="{{ request()->is('pembina/notifikasi') ? 'active' : '' }}" href="{{ route('pembina.notifikasi') }}"><i class="bi bi-bell"></i> Notifikasi</a>
        <a class="{{ request()->is('pembina/sertifikat') ? 'active' : '' }}" href="{{ route('pembina.sertifikat.index') }}"><i class="bi bi-file-earmark-arrow-up"></i> Upload Sertifikat</a>
        </div>
    </div>

    <!-- SIDEBAR DESKTOP -->
    <div class="sidebar">
        <h5 class="mb-4 text-center fw-bold">Pembina G-EXIS</h5>
        <a class="{{ request()->is('pembina/beranda') ? 'active' : '' }}" href="{{ route('pembina.beranda') }}"><i class="bi bi-house-door"></i> Beranda</a>
        <a class="{{ request()->is('pembina/konfirmasi') ? 'active' : '' }}" href="{{ route('pembina.konfirmasi') }}"><i class="bi bi-clipboard-check"></i> Kelola Siswa</a>
        <a class="{{ request()->is('pembina/absen') ? 'active' : '' }}" href="{{ route('pembina.absen') }}"><i class="bi bi-people"></i> Absen Siswa</a>
        <a class="{{ request()->is('pembina/notifikasi') ? 'active' : '' }}" href="{{ route('pembina.notifikasi') }}"><i class="bi bi-bell"></i> Notifikasi</a>
        <a class="{{ request()->is('pembina/sertifikat') ? 'active' : '' }}" href="{{ route('pembina.sertifikat.index') }}"><i class="bi bi-file-earmark-arrow-up"></i> Upload Sertifikat</a>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="topbar">
            <i class="bi bi-list menu-btn" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar"></i>

            <!-- LOGO -->
            <div class="gap-1 d-flex align-items-center">
                <img src="{{ asset('images/logoge.png') }}" alt="G Logo" class="logo-img">
                <span class="logo-text">- EXIS</span>
            </div>


            <!-- PROFILE DROPDOWN -->
            <div class="dropdown">
                <i class="bi bi-person-circle profile-icon" data-bs-toggle="dropdown"></i>
                <ul class="dropdown-menu dropdown-menu-end profile-dropdown">
                    <li class="px-3 pb-2">
                        <div class="fw-bold" style="font-size: 15px;">{{ Auth::user()->name }}</div>
                        <div style="font-size: 13px; opacity: .8;">{{ Auth::user()->email }}</div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

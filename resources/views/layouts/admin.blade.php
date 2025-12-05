<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin G-EXIS</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


<style>
body {
    background: #F7F3E9;
    font-family: 'Poppins', sans-serif;
}

/* ==================== SIDEBAR ==================== */
.sidebar {
    width: 260px;
    height: 100vh;
    background: #1B517D;
    position: fixed;
    padding: 30px 20px;
    color: #fff;
    overflow-y: auto;
    padding-bottom: 120px;
}

.sidebar .title {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 40px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.sidebar .menu a {
    display: flex;
    align-items: center;
    padding: 12px;
    font-size: 17px;
    border-radius: 12px;
    color: #fff;
    margin-bottom: 18px;
    text-decoration: none;
    transition: 0.2s;
}

.sidebar .menu a:hover,
.sidebar .menu a.active {
    background: rgba(255,255,255,0.2);
}

.sidebar .menu i {
    font-size: 22px;
    margin-right: 14px;
}

.logout-btn {
    background: #FF3B30;
    padding: 14px;
    border-radius: 30px;
    text-align: center;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
    font-size: 18px;
}

/* ==================== NAVBAR ==================== */
.navbar-custom {
    margin-left: 260px;
    height: 85px;
    padding: 18px 35px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar-box {
    background: #1B517D;
    padding: 12px 20px;
    border-radius: 50px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
}

/* SEARCH BAR */
.search-box {
    background: white;
    border-radius: 30px;
    padding: 8px 18px;
    width: 330px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.15);
}

.search-box {
    margin-left: auto;
    margin-right: 20px; /* jarak ke ikon */
    color: #1B517D
}

.search-box input {
    border: none;
    outline: none;
    width: 100%;
    font-size: 15px;
}


/* NOTIF & USER ICON */
.icon-btn {
    font-size: 26px;
    color: white;
    margin-left: 18px;
    cursor: pointer;
    transition: 0.2s;
}

.icon-btn:hover {
    transform: scale(1.15);
}

/* BADGE NOTIF */
.notif-badge {
    background: red;
    color: white;
    font-size: 11px;
    border-radius: 50%;
    padding: 2px 6px;
    position: absolute;
    top: -4px;
    right: -8px;
}

/* DROPDOWN */
.dropdown-menu-custom {
    background: #1B517D;
    border-radius: 14px;
    padding: 10px 0;
    min-width: 180px;
}

.dropdown-menu-custom a {
    padding: 10px 18px;
    color: white;
    text-decoration: none;
    display: block;
}

.dropdown-menu-custom a:hover {
    background: rgba(255,255,255,0.2);
}

.main-content {
    margin-left: 260px;
    padding: 40px;
}
</style>
</head>

<body>

<!-- ==================== SIDEBAR ==================== -->
<div class="sidebar">

    <div class="title">
        <i class="bi bi-person-circle" style="font-size:30px;"></i>
        Admin G-EXIS
    </div>

    <div class="menu">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="{{ route('admin.data.siswa') }}" class="{{ request()->routeIs('admin.data.siswa') ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i> Data Siswa
        </a>

        <a href="{{ route('admin.data.pembina') }}" class="{{ request()->routeIs('admin.data.pembina') ? 'active' : '' }}">
            <i class="bi bi-person-badge-fill"></i> Data Pembina
        </a>

        <a href="{{ route('admin.monitoring') }}" class="{{ request()->routeIs('admin.monitoring') ? 'active' : '' }}">
            <i class="bi bi-music-note-beamed"></i> Monitoring Ekskul
        </a>

        <a href="{{ route('admin.rekap.absen') }}" class="{{ request()->routeIs('admin.rekap.absen') ? 'active' : '' }}">
            <i class="bi bi-list-check"></i> Kelola Absen
        </a>

        <a href="{{ route('admin.kelola.notifikasi') }}" class="{{ request()->routeIs('admin.kelola.notifikasi') ? 'active' : '' }}">
            <i class="bi bi-bell-fill"></i> Kelola Notifikasi
        </a>
    </div>

    <div class="logout-btn" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="bi bi-box-arrow-right me-2"></i> Logout
    </div>
</div>

<!-- ==================== NAVBAR ==================== -->
<div class="navbar-custom">

    <div class="navbar-box">

        <!-- LOGO -->
        <img src="{{ asset('images/logoekskul.png') }}" class="navbar-logo" style="height:48px;">

        <div class="search-box">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search here...">
        </div>

        <!-- RIGHT ICONS -->
        <div class="d-flex align-items-center">

            <!-- NOTIF -->
            <div class="dropdown me-3 position-relative">
                <i class="bi bi-bell-fill icon-btn" data-bs-toggle="dropdown"></i>
                <span class="notif-badge">4</span>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                    <a href="{{ route('admin.notifikasi') }}">Lihat Semua</a>
                </div>
            </div>

            <!-- USER -->
            <div class="dropdown">
                <i class="bi bi-person-circle icon-btn" data-bs-toggle="dropdown"></i>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                    <a href="{{ route('admin.profil.admin') }}">Profil</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    @yield('content')
</div>

<!-- ==================== MODAL LOGOUT ==================== -->
<div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" 
            style="background:#0E3A5D; border-radius:25px; padding:35px; color:white;">

            <div class="modal-body text-center">

                <h4 class="fw-bold mb-4">Apakah kamu yakin<br> untuk LOGOUT?</h4>

                <div class="d-flex justify-content-center gap-4">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            style="background:#92FF92; padding:12px 35px; border-radius:14px;
                                   border:none; font-weight:700; font-size:18px;">
                            YA
                        </button>
                    </form>

                    <button class="btn"
                        data-bs-dismiss="modal"
                        style="background:#FFB3B3; padding:12px 35px; border-radius:14px;
                               font-weight:700; font-size:18px;">
                        TIDAK
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

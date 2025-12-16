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
    background: #F5F7FA;
    font-family: 'Poppins', sans-serif;
}

/* ==================== SIDEBAR ==================== */
.sidebar {
    width: 250px;
    height: 100vh;
    background: #0E3A5D;
    position: fixed;
    padding: 28px 18px;
    color: #fff;
    overflow-y: auto;
}

.sidebar .title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 36px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.sidebar .menu a {
    display: flex;
    align-items: center;
    padding: 12px 14px;
    font-size: 15px;
    border-radius: 10px;
    color: #E5ECF3;
    margin-bottom: 10px;
    text-decoration: none;
    transition: all .2s ease;
}

.sidebar .menu a i {
    font-size: 20px;
    margin-right: 14px;
}

.sidebar .menu a:hover {
    background: rgba(255,255,255,0.08);
}

.sidebar .menu a.active {
    background: rgba(255,255,255,0.18);
    font-weight: 600;
}

/* LOGOUT */
.logout-btn {
    background: #E94E4E;
    padding: 12px;
    border-radius: 20px;
    text-align: center;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin-top: 40px;
    width: 100%;
    font-size: 15px;
}

/* ==================== NAVBAR ==================== */
.navbar-custom {
    margin-left: 250px;
    height: 80px;
    padding: 16px 30px;
}

.navbar-box {
    background: #0E3A5D;
    padding: 12px 22px;
    border-radius: 40px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
}

/* SEARCH BAR */
.search-box {
    background: #ffffff;
    border-radius: 30px;
    padding: 8px 18px;
    width: 300px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.12);
    margin-left: auto;
    margin-right: 20px;
}

.search-box i {
    color: #0E3A5D;
}

.search-box input {
    border: none;
    outline: none;
    width: 100%;
    font-size: 14px;
}

/* ICONS */
.icon-btn {
    font-size: 24px;
    color: white;
    margin-left: 16px;
    cursor: pointer;
    transition: .2s;
}

.icon-btn:hover {
    transform: scale(1.1);
}

/* BADGE */
.notif-badge {
    background: #FF3B30;
    color: white;
    font-size: 10px;
    border-radius: 50%;
    padding: 2px 6px;
    position: absolute;
    top: -4px;
    right: -8px;
}

/* DROPDOWN */
.dropdown-menu-custom {
    background: #0E3A5D;
    border-radius: 12px;
    padding: 8px 0;
    min-width: 170px;
}

.dropdown-menu-custom a {
    padding: 10px 16px;
    color: white;
    text-decoration: none;
    display: block;
    font-size: 14px;
}

.dropdown-menu-custom a:hover {
    background: rgba(255,255,255,0.15);
}

/* MAIN CONTENT */
.main-content {
    margin-left: 250px;
    padding: 40px;
}
</style>

</head>

<body>

<!-- ==================== SIDEBAR ==================== -->
<div class="sidebar">

    <div class="title">
        <i class="bi bi-grid-fill" style="font-size:30px;"></i>
        Admin G-EXIS
    </div>

    <div class="menu">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
           <i class="bi bi-clipboard-data"></i> Dashboard

        </a>
       <a href="{{ route('admin.users.index') }}"
   class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
    <i class="bi bi-person-workspace"></i>Kelola User
</a>
<a href="{{ route('admin.riwayat.pendaftaran') }}"
   class="{{ request()->routeIs('admin.riwayat.pendaftaran') ? 'active' : '' }}">
    <i class="bi bi-clock-history"></i> Riwayat Pendaftaran
</a>


        <a href="{{ route('admin.kelola.notifikasi') }}" class="{{ request()->routeIs('admin.kelola.notifikasi') ? 'active' : '' }}">
            <i class="bi bi-bell-fill"></i> Kelola Notifikasi
        </a>
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
                    <a href="{{ route('admin.kelola.notifikasi') }}">Lihat Semua</a>

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

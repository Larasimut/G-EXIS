<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar & Sidebar</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fbff;
            margin: 0;
        }

        /* NAVBAR */
        .navbar {
            background: #ffffff;
            padding: 14px 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,.06);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .btn-back {
            background: #4a90e2;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-toggler {
            border: none;
            background: none;
            font-size: 26px;
            color: #4a90e2;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0;
            left: -320px;
            width: 320px;
            height: 100vh;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,.15);
            padding: 25px 20px;
            transition: .35s ease;
            z-index: 1050;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar-header {
            text-align: center;
            position: relative;
            margin-bottom: 30px;
        }

        .profile-picture {
            font-size: 80px;
            color: #4a90e2;
        }

        .sidebar-header h5 {
            font-weight: 600;
            margin-top: 10px;
            color: #1e293b;
        }

        .sidebar-close {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            font-size: 26px;
            color: #4a90e2;
            cursor: pointer;
        }

        /* MENU */
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 12px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 16px;
            border-radius: 14px;
            font-weight: 500;
            color: #374151;
            text-decoration: none;
            transition: .25s ease;
        }

        .sidebar-menu a i {
            font-size: 20px;
            color: #4a90e2;
        }

        .sidebar-menu a:hover {
            background: rgba(74,144,226,.12);
            color: #4a90e2;
            transform: translateX(4px);
        }

        /* LOGOUT */
        .logout-btn {
            margin-top: 25px;
            background: #ef4444;
            color: white;
            padding: 12px;
            border-radius: 14px;
            display: flex;
            justify-content: center;
            font-weight: 600;
            text-decoration: none;
            transition: .25s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        /* OVERLAY */
        .sidebar-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.45);
            display: none;
            z-index: 1040;
        }

        .sidebar-overlay.show {
            display: block;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar">
    <div class="container d-flex justify-content-between align-items-center">
        <button class="btn-back" onclick="history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>

        <button class="navbar-toggler" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">

    <div class="sidebar-header">
        <button class="sidebar-close" id="sidebarClose">&times;</button>

        <i class="bi bi-person-circle profile-picture"></i>
        <h5>Siswa – {{ Auth::user()->name }}</h5>
    </div>

    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('siswa.formpendaftaran') }}">
                <i class="bi bi-plus-circle"></i>
                Daftar Ekstrakulikuler
            </a>
        </li>

        <li>
            <a href="{{ route('siswa.ekskulTerdaftar') }}">
                <i class="bi bi-people"></i>
                Ekskul Terdaftar
            </a>
        </li>

        <li>
            <a href="{{ route('siswa.notifikasi') }}">
                <i class="bi bi-bell"></i>
                Notifikasi
            </a>
        </li>
    </ul>

    <a href="{{ route('logout.confirm') }}" class="logout-btn">
        LOG OUT
    </a>
</div>

<!-- OVERLAY -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- SCRIPT -->
<script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebarToggle');
    const closeBtn = document.getElementById('sidebarClose');
    const overlay = document.getElementById('sidebarOverlay');

    toggle.onclick = () => {
        sidebar.classList.add('open');
        overlay.classList.add('show');
    };

    closeBtn.onclick = () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
    };

    overlay.onclick = () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
    };
</script>

</body>
</html>

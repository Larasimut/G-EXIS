<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar & Sidebar Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #4a90e2;
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-border: rgba(74, 144, 226, 0.1);
            --shadow-elegant: 0 10px 30px rgba(74, 144, 226, 0.15);
        }

        body {
            background: #f8fbff;
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
            color: #1e293b;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--glass-border);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .btn-back {
            background: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
        }

        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .navbar-toggler {
            border: none;
            background: transparent;
            color: var(--primary-blue);
            font-size: 24px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: -300px;
            width: 300px;
            height: 100%;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-right: 1px solid var(--glass-border);
            box-shadow: var(--shadow-elegant);
            transition: left 0.3s ease;
            z-index: 1050;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar.open {
            left: 0;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .sidebar-close {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary-blue);
            cursor: pointer;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu li {
            margin-bottom: 15px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 15px;
            color: #374151;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .sidebar-menu a:hover {
            background: rgba(74, 144, 226, 0.1);
            color: var(--primary-blue);
            transform: translateX(5px);
        }

        .sidebar-menu a i {
            font-size: 20px;
        }

        /* Overlay for sidebar */
        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 1040;
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 250px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar dengan tombol back dan burger -->
<nav class="navbar">
    <div class="container">
        <button class="btn-back" onclick="history.back()">
            <i class="bi bi-arrow-left"></i>
        </button>
        <button class="navbar-toggler" type="button" id="sidebarToggle">
            <i class="bi bi-list"></i>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <h5 class="mb-0" style="color: var(--primary-blue);">Menu Navigasi</h5>
        <button class="sidebar-close" id="sidebarClose">&times;</button>
    </div>
    <ul class="sidebar-menu">
        <li><a href="#"><i class="bi bi-house-door"></i> Dashboard</a></li>
        <li><a href="#"><i class="bi bi-check-circle"></i> Absensi</a></li>
        <li><a href="#"><i class="bi bi-calendar-event"></i> Jadwal Latihan</a></li>
        <li><a href="#"><i class="bi bi-award"></i> Sertifikat</a></li>
        <li><a href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
    </ul>
</div>

<!-- Sidebar Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<!-- Script untuk toggle sidebar -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarClose = document.getElementById('sidebarClose');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        // Toggle sidebar open
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.add('open');
            sidebarOverlay.classList.add('show');
        });

        // Close sidebar
        sidebarClose.addEventListener('click', function() {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('show');
        });

        // Close sidebar when clicking overlay
        sidebarOverlay.addEventListener('click', function() {
            sidebar.classList.remove('open');
            sidebarOverlay.classList.remove('show');
        });
    });
</script>

</body>
</html>

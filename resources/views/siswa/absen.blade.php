<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Ekskul – Paskibra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
            --success-green: #10b981;
            --warning-orange: #f59e0b;
            --danger-red: #ef4444;
        }

        body {
            background: var(--soft-blue);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
            color: #1e293b;
            position: relative;
        }

        /* Subtle background pattern for uniqueness */
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

        .navbar-toggler {
            border: none;
            background: transparent;
            color: var(--primary-blue);
            font-size: 24px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
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

        .banner {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border-radius: 24px;
            padding: 50px 40px;
            color: white;
            box-shadow: var(--shadow-elegant);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s ease-out;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .banner h2 {
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }

        .banner p, .banner small {
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }

        .absen-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            animation: fadeInUp 0.8s ease-out 0.2s forwards;
            opacity: 0;
            position: relative;
        }

        .absen-card h4 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .radio-option:hover {
            border-color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.2);
        }

        .radio-option.selected {
            border-color: var(--primary-blue);
            background: rgba(74, 144, 226, 0.1);
        }

        .radio-option input[type="radio"] {
            display: none;
        }

        .radio-option input[type="radio"]:checked + .radio-label {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .radio-option input[type="radio"]:checked + .radio-label .bi {
            color: var(--primary-blue);
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            transition: color 0.3s ease;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            padding: 12px 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
        }

        .btn-camera {
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-blue));
            color: white;
            font-weight: 600;
            border-radius: 12px;
            padding: 14px 24px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
        }

        .btn-camera:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .btn-camera i {
            margin-right: 8px;
        }

        video {
            width: 100%;
            border-radius: 16px;
            margin-top: 20px;
            display: none;
            box-shadow: var(--shadow-elegant);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border: none;
            border-radius: 12px;
            padding: 14px 28px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .timeline {
            border-left: 4px solid var(--primary-blue);
            margin-left: 12px;
            padding-left: 30px;
            position: relative;
        }

        .timeline-box {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--glass-border);
            position: relative;
            transition: all 0.3s ease;
            animation: slideInLeft 0.6s ease-out forwards;
            opacity: 0;
        }

        .timeline-box:nth-child(1) { animation-delay: 0.1s; }
        .timeline-box:nth-child(2) { animation-delay: 0.2s; }
        .timeline-box:nth-child(3) { animation-delay: 0.3s; }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .timeline-box:hover {
            transform: translateX(8px);
            box-shadow: var(--shadow-hover);
        }

        .timeline-box::before {
            content: "";
            width: 16px;
            height: 16px;
            background: var(--primary-blue);
            border-radius: 50%;
            position: absolute;
            left: -35px;
            top: 24px;
            box-shadow: 0 0 0 4px rgba(74, 144, 226, 0.2);
        }

        .timeline-box b {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .timeline-box .status {
            font-weight: 600;
        }

        .timeline-box .text-success { color: var(--success-green); }
        .timeline-box .text-warning { color: var(--warning-orange); }
        .timeline-box .text-danger { color: var(--danger-red); }

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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .banner {
                padding: 30px 20px;
            }
            .absen-card {
                padding: 30px 20px;
            }
            .radio-group {
                flex-direction: column;
                gap: 12px;
            }
            .timeline {
                padding-left: 20px;
            }
            .timeline-box::before {
                left: -28px;
            }
            .sidebar {
                width: 250px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
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

<div class="container py-5">

    <!-- BANNER -->
    <div class="banner text-center mb-5">
        <h2 class="fw-bold">Absensi Ekskul Paskibra</h2>
        <p class="mb-2 fs-5">Tunjukkan keaktifanmu hari ini! 💪</p>
        <small>Senin, 3 Februari 2025</small>
    </div>

    <!-- ABSENSI -->
    <div class="absen-card mb-5">
        <h4 class="fw-bold text-center mb-4">Isi Absensi</h4>

        <form id="absensiForm">
            <label class="form-label mb-3 d-block">Status Kehadiran:</label>
            <div class="radio-group">
                <div class="radio-option" data-value="hadir">
                    <input type="radio" name="kehadiran" id="hadir" value="hadir">
                    <label for="hadir" class="radio-label">
                        <i class="bi bi-check-circle-fill"></i> Hadir
                    </label>
                </div>
                <div class="radio-option" data-value="izin">
                    <input type="radio" name="kehadiran" id="izin" value="izin">
                    <label for="izin" class="radio-label">
                        <i class="bi bi-exclamation-triangle-fill"></i> Izin
                    </label>
                </div>
                <div class="radio-option" data-value="sakit">
                    <input type="radio" name="kehadiran" id="sakit" value="sakit">
                    <label for="sakit" class="radio-label">
                        <i class="bi bi-thermometer-half"></i> Sakit
                    </label>
                </div>
            </div>

            <label class="form-label mb-2">Keterangan (opsional):</label>
            <textarea class="form-control mb-4" name="keterangan" rows="3" placeholder="Tulis alasan jika izin/sakit..."></textarea>

            <!-- Kamera -->
            <div class="text-center mb-4">
                <button type="button" class="btn btn-camera" id="startCamera">
                    <i class="bi bi-camera-fill"></i> Scan Wajah (Kamera)
                </button>
            </div>

            <video id="cameraFeed" autoplay></video>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 py-2">Kirim Absensi</button>
            </div>
        </form>
    </div>

    <!-- RIWAYAT -->
    <h4 class="fw-bold mb-4" style="color: var(--primary-blue);">Riwayat Absensi</h4>
    <div class="timeline">
        <div class="timeline-box">
            <b>31 Januari 2025</b> — <span class="status text-success"><i class="bi bi-check-circle-fill"></i> Hadir</span>
            <div class="small text-muted mt-1">Tepat waktu</div>
        </div>

        <div class="timeline-box">
            <b>24 Januari 2025</b> — <span class="status text-warning"><i class="bi bi-exclamation-triangle-fill"></i> Izin</

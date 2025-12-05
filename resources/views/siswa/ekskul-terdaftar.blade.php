<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekskul Terdaftar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --blue-dark: #1E2A38;
            --blue-soft: #2E4563;
            --accent: #3B7FDB;
            --accent-hover: #2569c9;
            --bg: linear-gradient(135deg, #E7EEF6 0%, #F0F4F8 100%);
            --card-bg: rgba(255, 255, 255, 0.95);
            --shadow-light: 0 4px 15px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 12px 40px rgba(0, 0, 0, 0.2);
            --ribbon-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: "Poppins", sans-serif;
            background: var(--bg);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Animated Background Pattern */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle at 20% 80%, rgba(59, 127, 219, 0.1) 0%, transparent 50%),
                              radial-gradient(circle at 80% 20%, rgba(30, 42, 56, 0.1) 0%, transparent 50%);
            z-index: -1;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* NAVBAR */
        .custom-nav {
            background: linear-gradient(135deg, var(--blue-dark) 0%, var(--blue-soft) 100%);
            color: white;
            padding: 16px 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-light);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .custom-nav::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .custom-nav h5 {
            font-weight: 700;
            z-index: 1;
            position: relative;
        }

        .custom-nav i {
            z-index: 1;
            position: relative;
            transition: transform 0.3s ease;
        }

        .custom-nav i:hover {
            transform: scale(1.1);
        }

        /* SIDEBAR */
        #sidebar {
            position: fixed;
            top: 0;
            left: -320px;
            width: 320px;
            height: 100%;
            background: linear-gradient(180deg, var(--blue-dark) 0%, var(--blue-soft) 100%);
            padding: 32px 24px;
            transition: left 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 9999;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 0 20px 20px 0;
        }

        #sidebar h5 {
            font-weight: 700;
            margin-bottom: 24px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 12px;
        }

        #sidebar a {
            color: #d8e3f2;
            display: flex;
            align-items: center;
            padding: 12px 0;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin-bottom: 4px;
        }

        #sidebar a i {
            margin-right: 12px;
            font-size: 18px;
        }

        #sidebar a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        #overlaySidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            z-index: 9998;
            display: none;
            transition: opacity 0.3s ease;
        }

        /* CLUB CARD */
        .club-card {
            border-radius: 24px;
            overflow: hidden;
            border: none;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            background: var(--card-bg);
            box-shadow: var(--shadow-light);
            position: relative;
            backdrop-filter: blur(10px);
            transform: translateY(0);
        }

        .club-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .club-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .club-card:hover .club-img {
            transform: scale(1.05);
        }

        /* STATUS RIBBON */
        .status-ribbon {
            position: absolute;
            top: 16px;
            left: 16px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 20px;
            backdrop-filter: blur(8px);
            box-shadow: var(--ribbon-shadow);
            display: flex;
            align-items: center;
            z-index: 2;
        }

        .status-ribbon i {
            margin-right: 6px;
        }

        /* DETAIL INFO */
        .detail-info {
            font-size: 14px;
            color: #666;
            margin-bottom: 16px;
        }

        .detail-info p {
            margin-bottom: 4px;
            display: flex;
            align-items: center;
        }

        .detail-info i {
            margin-right: 8px;
            color: var(--accent);
        }

        /* BUTTONS */
        .btn-primary {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-hover) 100%);
            border: none;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(59, 127, 219, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 127, 219, 0.4);
        }

        .btn-outline-danger {
            border-radius: 12px;
            border: 2px solid #dc3545;
            color: #dc3545;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-danger:hover {
            background: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 53, 69, 0.3);
        }

        /* Container Animation */
        .container {
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            #sidebar {
                width: 280px;
            }
            .club-card {
                margin-bottom: 20px;
            }
            .detail-info {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

    <!-- OVERLAY -->
    <div id="overlaySidebar" onclick="closeSidebar()"></div>

    <!-- SIDEBAR -->
    <div id="sidebar">
        <h5 class="text-white fw-semibold mb-4"><i class="bi bi-menu-app"></i> Navigasi</h5>
        <a href="#"><i class="bi bi-house-door"></i> Beranda</a>
        <a href="#"><i class="bi bi-star"></i> Ekskul Saya</a>
        <a href="#"><i class="bi bi-person-circle"></i> Profil</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Keluar</a>
    </div>

    <!-- NAVBAR -->
    <nav class="custom-nav d-flex align-items-center justify-content-between">
        <i class="bi bi-arrow-left text-white fs-4" style="cursor:pointer;" onclick="history.back()"></i>
        <h5 class="m-0">Ekskul Terdaftar</h5>
        <i class="bi bi-list fs-3" style="cursor:pointer;" onclick="openSidebar()"></i>
    </nav>

    <div class="container py-5">

        <div class="row g-4">

            <!-- CARD 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="club-card">
                    <span class="status-ribbon bg-success text-white"><i class="bi bi-check-circle"></i> DITERIMA</span>
                    <img src="https://picsum.photos/600/400?random=1" class="club-img" alt="Paskibra">
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Paskibra</h5>
                        <div class="detail-info">
                            <p><i class="bi bi-calendar-plus"></i> Mendaftar: 15 Oktober 2023</p>
                            <p><i class="bi bi-check-circle"></i> Dikonfirmasi: 18 Oktober 2023</p>
                        </div>
                        <div class="d-flex justify-content-between gap-2">
                           <a href="{{ route('siswa.detailTerdaftar') }}" class="btn btn-primary btn-sm px-4 py-2"><i class="bi bi-eye"></i> Lihat Detail</a>
                            <a href="#" class="btn btn-outline-danger btn-sm px-4 py-2"><i class="bi bi-x-circle"></i> Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="club-card">
                    <span class="status-ribbon bg-warning text-dark"><i class="bi bi-clock"></i> MENUNGGU</span>
                    <img src="https://picsum.photos/600/400?random=2" class="club-img" alt="Basket">
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Basket</h5>
                        <div class="detail-info">
                            <p><i class="bi bi-calendar-plus"></i> Mendaftar: 20 Oktober 2023</p>
                            <p><i class="bi bi-hourglass-split"></i> Status: Menunggu Konfirmasi</p>
                        </div>
                        <div class="d-flex justify-content-between gap-2">
                           <a href="{{ route('siswa.detailTerdaftar') }}" class="btn btn-primary btn-sm px-4 py-2"><i class="bi bi-eye"></i> Lihat Detail</a>
                            <a href="#" class="btn btn-outline-danger btn-sm px-4 py-2"><i class="bi bi-x-circle"></i> Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="club-card">
                    <span class="status-ribbon bg-danger text-white"><i class="bi bi-x-circle"></i> DITOLAK</span>
                   <img src="https://picsum.photos/600/400?random=1"  class="club-img" alt="Pramuka">
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Pramuka</h5>
                        <div class="detail-info">
                            <p><i class="bi bi-calendar-plus"></i> Mendaftar: 10 Oktober 2023</p>
                            <p><i class="bi bi-x-circle"></i> Ditolak: 12 Oktober 2023</p>
                        </div>
                        <div class="d-flex justify-content-between gap-2">
                            <a href="{{ route('siswa.detailTerdaftar') }}" class="btn btn-primary btn-sm px-4 py-2"><i class="bi bi-eye"></i> Lihat Detail</a>
                            <a href="#" class="btn btn-outline-danger btn-sm px-4 py-2"><i class="bi bi-x-circle"></i> Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script>
        function openSidebar() {
            document.getElementById("sidebar").style.left = "0";
            document.getElementById("overlaySidebar").style.display = "block";
            document.getElementById("overlaySidebar").style.opacity = "1";
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.left = "-320px";
            document.getElementById("overlaySidebar").style.opacity = "0";
            setTimeout(() => {
                document.getElementById("overlaySidebar").style.display = "none";
            }, 300);
        }

        // Close sidebar on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    </script>

</body>
</html>

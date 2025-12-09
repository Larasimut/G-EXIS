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

        .custom-nav {
            background: linear-gradient(135deg, var(--blue-dark) 0%, var(--blue-soft) 100%);
            color: white;
            padding: 16px 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            box-shadow: var(--shadow-light);
            backdrop-filter: blur(10px);
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: -320px;
            width: 320px;
            height: 100%;
            background: linear-gradient(180deg, var(--blue-dark) 0%, var(--blue-soft) 100%);
            padding: 32px 24px;
            transition: left 0.4s;
            z-index: 9999;
            border-radius: 0 20px 20px 0;
        }

        #sidebar a {
            display: block;
            padding: 12px 0;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        #sidebar a:hover {
            color: #cdd9ff;
        }

        #overlaySidebar {
            position: fixed; top: 0; left: 0;
            width: 100%; height: 100vh;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(5px);
            z-index: 9998;
            display: none;
        }

        .club-card {
            border-radius: 24px;
            background: var(--card-bg);
            box-shadow: var(--shadow-light);
            overflow: hidden;
            transition: .4s;
            position: relative;
        }

        .club-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

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
            z-index: 2;
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

            @foreach ($pendaftar as $item)
            <div class="col-md-6 col-lg-4">
                <div class="club-card">

                    @if($item->status == 'diterima')
                        <span class="status-ribbon bg-success text-white">
                            <i class="bi bi-check-circle"></i> DITERIMA
                        </span>
                    @elseif($item->status == 'pending')
                        <span class="status-ribbon bg-warning text-dark">
                            <i class="bi bi-clock"></i> MENUNGGU
                        </span>
                    @else
                        <span class="status-ribbon bg-danger text-white">
                            <i class="bi bi-x-circle"></i> DITOLAK
                        </span>
                    @endif
<br><br>
                    <div class="p-4">
                        <h4 class="fw-bold mb-2 text-capitalize">{{ $item->ekskul }}</h4>

                        <div class="detail-info">
                            <p><i class="bi bi-calendar-plus"></i> Mendaftar: {{ $item->created_at->format('d M Y') }}</p>
                            <p><i class="bi bi-person"></i> Nama: {{ $item->nama }}</p>


                            @if($item->status == 'diterima')
                                <p><i class="bi bi-check-circle"></i> Dikonfirmasi: {{ $item->updated_at->format('d M Y') }}</p>
                            @elseif($item->status == 'pending')
                                <p><i class="bi bi-hourglass-split"></i> Status: Menunggu Konfirmasi Pembina</p>
                            @else
                                <p><i class="bi bi-x-circle"></i> Ditolak: {{ $item->updated_at->format('d M Y') }}</p>
                            @endif
                        </div>

                        @if($item->status == 'diterima')
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <a href="{{ route('siswa.detailTerdaftar', $item->id) }}"
                                class="btn btn-primary btn-sm px-4 py-2">
                                <i class="bi bi-eye"></i> Lihat Detail
                            </a>

                            <form action="{{ route('siswa.batalEkskul', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm px-4 py-2">
                                    <i class="bi bi-x-circle"></i> Keluar
                                </button>
                            </form>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach

            @if($pendaftar->isEmpty())
                <p class="text-center mt-5 text-muted">Belum ada ekskul yang kamu daftarkan.</p>
            @endif

        </div>
    </div>

    <script>
        function openSidebar() {
            document.getElementById("sidebar").style.left = "0";
            document.getElementById("overlaySidebar").style.display = "block";
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.left = "-320px";
            document.getElementById("overlaySidebar").style.display = "none";
        }
    </script>

</body>
</html>

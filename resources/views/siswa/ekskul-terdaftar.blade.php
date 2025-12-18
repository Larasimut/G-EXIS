<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekskul Saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: linear-gradient(135deg, #E7EEF6 0%, #F0F4F8 100%);
            --card-bg: rgba(255, 255, 255, 0.96);
            --shadow-light: 0 6px 18px rgba(0, 0, 0, 0.12);
            --shadow-hover: 0 14px 40px rgba(0, 0, 0, 0.22);
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
            inset: 0;
            background-image:
              radial-gradient(circle at 20% 80%, rgba(59,127,219,.1) 0%, transparent 50%),
              radial-gradient(circle at 80% 20%, rgba(30,42,56,.1) 0%, transparent 50%);
            z-index: -1;
            animation: float 18s ease-in-out infinite;
        }

        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* CARD */
        .club-card {
            border-radius: 26px;
            background: var(--card-bg);
            box-shadow: var(--shadow-light);
            overflow: hidden;
            transition: .4s;
            position: relative;
        }

        .club-card:hover {
            transform: translateY(-10px) scale(1.015);
            box-shadow: var(--shadow-hover);
        }

        /* STATUS */
        .status-ribbon {
            position: absolute;
            top: 18px;
            left: 18px;
            padding: 8px 18px;
            font-size: 12px;
            font-weight: 700;
            border-radius: 22px;
            backdrop-filter: blur(8px);
            box-shadow: var(--ribbon-shadow);
            z-index: 2;
        }
    </style>
</head>

<body>
  @include('layouts.sidebar')

    <!-- CONTENT -->
    <div class="container py-5">
        <div class="row g-4">

            @foreach ($pendaftar as $item)
            <div class="col-md-6 col-lg-4">
                <div class="club-card">

                    {{-- STATUS --}}
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
<br>
                    <div class="p-4 pt-5">
                        <h4 class="fw-bold mb-2 text-capitalize">{{ $item->ekskul }}</h4>

                        <p class="mb-2">
                            <i class="bi bi-person"></i> {{ $item->nama }}
                        </p>

                        @if($item->status == 'diterima')
                            <p class="text-success small">
                                <i class="bi bi-check-circle"></i>
                                Dikonfirmasi {{ $item->updated_at->format('d M Y') }}
                            </p>
                        @elseif($item->status == 'pending')
                            <p class="text-warning small">
                                <i class="bi bi-hourglass-split"></i>
                                Menunggu konfirmasi pembina
                            </p>
                        @else
                            <p class="text-danger small">
                                <i class="bi bi-x-circle"></i>
                                Ditolak {{ $item->updated_at->format('d M Y') }}
                            </p>
                        @endif

                        @if($item->status == 'diterima')
                        <div class="d-flex justify-content-between gap-2 mt-3">
                            <a href="{{ route('siswa.detailTerdaftar', $item->id) }}"
                               class="btn btn-primary btn-sm px-4 py-2 rounded-pill">
                                <i class="bi bi-eye"></i> Detail
                            </a>


                        </div>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach

            {{-- EMPTY STATE --}}
            @if($pendaftar->isEmpty())
                <div class="text-center text-muted py-5">
                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                    Belum ada ekskul yang kamu daftarkan
                </div>
            @endif

        </div>
    </div>

</body>
</html>

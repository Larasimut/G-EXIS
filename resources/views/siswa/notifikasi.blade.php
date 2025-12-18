<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #E3F1FF;
            font-family: 'Poppins', sans-serif;
        }

        .notif-card {
            background: white;
            border-radius: 18px;
            padding: 18px 16px;
            margin: 18px 0;
            box-shadow: 0 5px 12px rgba(0,0,0,0.12);
            display: flex;
            gap: 15px;
            align-items: flex-start;
            transition: 0.25s;
        }

        .notif-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 18px rgba(0,0,0,0.18);
        }

        .notif-icon {
            background: #4A76A8;
            border-radius: 14px;
            color: white;
            padding: 12px;
            font-size: 18px;
            min-width: 42px;
            text-align: center;
        }

        .notif-time {
            font-size: 13px;
            color: #6c757d;
            margin-top: 4px;
        }

        .alert-info-custom {
            background: #B5D4EB;
            border-radius: 20px;
            padding: 14px 20px;
            margin-top: 10px;
            font-weight: 500;
        }
    </style>
</head>

<body>
  @include('layouts.sidebar')

<div class="container py-4">

    {{-- INFO JUMLAH NOTIF --}}
    @if($notifs->count() > 0)
        <div class="alert-info-custom text-center mb-4">
            📢 Kamu memiliki <b>{{ $notifs->count() }}</b> notifikasi
        </div>
    @else
        <div class="alert-info-custom text-center mb-4">
            Tidak ada notifikasi
        </div>
    @endif

    {{-- LIST NOTIF --}}
    @foreach($notifs as $notif)
        <div class="notif-card">
            <div class="notif-icon">
                <i class="fa fa-bell"></i>
            </div>

            <div>
<h6 class="fw-bold mb-1">
    <i class="fa fa-user-tie me-1"></i>
    Pembina {{ ucfirst($notif->ekskul) }}
</h6>

<p class="mb-1">{{ $notif->pesan }}</p>

<p class="notif-time">
    <i class="fa fa-clock me-1"></i>
    {{ $notif->created_at->diffForHumans() }}
</p>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>

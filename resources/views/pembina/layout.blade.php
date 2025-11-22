<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Pembina" }} - G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f7;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: .5px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #205781;">

    <div class="container">
        <a class="navbar-brand" href="{{ route('pembina.beranda') }}">G-EXIS Pembina</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('pembina.konfirmasi') }}">Konfirmasi</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pembina.absen') }}">Absen</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pembina.notifikasi') }}">Notifikasi</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pembina.sertifikat.index') }}">Upload Sertifikat</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('pembina.rekap') }}">Rekap Absen</a></li>
        </ul>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

</body>
</html>

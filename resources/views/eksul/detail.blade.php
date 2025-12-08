<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Detail Ekskul — {{ $eks['nama'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Crimson+Text:wght@600;700&display=swap" rel="stylesheet">

<style>
/* semua CSS kamu tetap sama, tidak aku ubah sedikit pun */
</style>
</head>

<body>

<div id="overlay"></div>

<header class="header-eks">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <button id="btnBurger" class="btn btn-light py-1 px-2"><i class="fa fa-bars"></i></button>
            <div>
                <h2 class="header-title">{{ $eks['nama'] }}</h2>
                <span class="header-sub">{{ $eks['desc'] }}</span>
            </div>
        </div>

        <a href="{{ route('siswa.formpendaftaran') }}">
            <button class="btn-gold">
                <i class="fa fa-user-plus me-2"></i> Daftar
            </button>
        </a>
    </div>
</header>

<main class="container py-5">

<section id="overview" class="row g-4 align-items-center mb-5 reveal">
    <div class="col-lg-4 text-center profile-area">
        <img src="{{ asset($eks['logo']) }}" alt="logo">
        <h4 class="mt-3 fw-bold text-primary">{{ $eks['nama'] }}</h4>
    </div>

    <div class="col-lg-8">
        <div class="card-box">
            <h5 class="section-title">Tentang Ekskul</h5>
            <p style="text-align:justify">
                {{ $eks['desc'] }}
            </p>
        </div>
    </div>
</section>

<section id="dokumentasi" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Galeri Dokumentasi</h5>

        <div class="row g-3">
            @foreach($eks['galeri'] as $g)
            <div class="col-md-4">
                <img src="{{ asset($g) }}" class="w-100 rounded" style="height:180px;object-fit:cover;">
            </div>
            @endforeach
        </div>

    </div>
</section>

@if(!empty($eks['video']))
<section id="video" class="reveal mb-5 text-center">
    <div class="card-box">
        <h5 class="section-title">Video Dokumentasi</h5>
        <video controls class="rounded border w-100" style="max-width:600px;">
            <source src="{{ asset($eks['video']) }}" type="video/mp4">
        </video>
        <p class="text-muted small mt-2">Video Kegiatan</p>
    </div>
</section>
@endif

<section id="pembina" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Profil Pembina</h5>

        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ asset($eks['pembina']['foto']) }}" class="rounded mb-2" style="width:150px;height:150px;object-fit:cover;">
            </div>

            <div class="col-md-9">
                <h5 class="fw-bold">{{ $eks['pembina']['nama'] }}</h5>
                <p style="text-align:justify">
                    {{ $eks['pembina']['bio'] }}
                </p>
            </div>
        </div>

    </div>
</section>

<section id="jadwal" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Jadwal Latihan</h5>
        <table class="table table-borderless">
            <tr><td>Hari</td><td>{{ $eks['hari'] }}</td></tr>
            <tr><td>Waktu</td><td>{{ $eks['waktu'] }}</td></tr>
            <tr><td>Tempat</td><td>{{ $eks['tempat'] }}</td></tr>
        </table>
    </div>
</section>

<section id="prestasi" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Prestasi</h5>

        <div class="row g-4">
            @foreach($eks['prestasi'] as $p)
            <div class="col-md-4">
                <img src="{{ asset($p['foto']) }}" class="w-100 rounded" style="height:170px;object-fit:cover;">
                <h6 class="fw-bold mt-2">{{ $p['judul'] }}</h6>
                <p class="text-muted small">{{ $p['ket'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

<section id="daftar" class="reveal mb-5 text-center">
    <div class="card-box">
        <h5 class="section-title">Ingin Bergabung?</h5>
        <p class="text-muted">Daftar dan jadilah bagian dari ekskul ini.</p>

        <a href="{{ route('siswa.formpendaftaran') }}">
            <button class="btn-gold">
                <i class="fa fa-user-plus me-2"></i> Daftar Sekarang
            </button>
        </a>

    </div>
</section>

</main>

<script>
// JS sidebar dan reveal tetap sama
</script>

</body>
</html>

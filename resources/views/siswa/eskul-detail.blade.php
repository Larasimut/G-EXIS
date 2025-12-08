<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Detail Ekskul — {{ $eskul['nama'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Crimson+Text:wght@600;700&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#14355d;
    --primary-light:#1d4d86;
    --accent:#e4b74d;
    --bg:#f2f5fa;
    --muted:#6e7a86;
}
body{font-family:"Poppins",sans-serif;background:var(--bg);color:#24364a;}
.header-eks{
    background:linear-gradient(120deg,var(--primary),#0d2339);
    padding:30px 0;color:#fff;
    box-shadow:0 4px 25px rgba(0,0,0,.23);
}
.header-title{font-family:"Crimson Text",serif;font-size:38px;font-weight:700;}
.header-sub{opacity:.85;}

.card-box{
    background:#fff;border-radius:18px;padding:30px;
    box-shadow:0 6px 22px rgba(0,0,0,.07);transition:.3s;
}
.card-box:hover{transform:translateY(-4px);box-shadow:0 13px 28px rgba(0,0,0,.13);}
.section-title{
    font-family:"Crimson Text",serif;font-size:26px;font-weight:700;
    margin-bottom:16px;position:relative;
}
.section-title::after{
    content:"";width:60px;height:3px;background:var(--accent);
    position:absolute;bottom:-6px;left:0;border-radius:6px;
}
.profile-area img{
    width:200px;height:200px;object-fit:cover;border-radius:14px;
    box-shadow:0 5px 18px rgba(0,0,0,.25);border:4px solid #fff;
}
.btn-gold{background:var(--accent);font-weight:700;padding:13px 28px;border-radius:10px;}
.btn-gold:hover{background:#c99c3e;}
.reveal{opacity:0;transform:translateY(30px);transition:.7s;}
.reveal.show{opacity:1;transform:translateY(0);}
</style>
</head>

<body>

<!-- HEADER -->
<header class="header-eks">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <h2 class="header-title">{{ $eskul['nama'] }}</h2>
            <span class="header-sub">{{ $eskul['desc'] }}</span>
        </div>

        <a href="{{ route('siswa.formpendaftaran') }}">
            <button class="btn-gold">
                <i class="fa fa-user-plus me-2"></i> Daftar
            </button>
        </a>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="container py-5">

    <!-- OVERVIEW -->
    <section class="row g-4 align-items-center mb-5 reveal">

        <div class="col-lg-4 text-center profile-area">
            <img src="{{ asset('images/'.$eskul['logo']) }}"
                 alt="logo" class="img-fluid rounded shadow">

            <h4 class="mt-3 fw-bold text-primary">{{ $eskul['nama'] }}</h4>
            <p class="text-muted small">{{ $eskul['kategori'] ?? 'Ekstrakurikuler' }}</p>
        </div>

        <div class="col-lg-8">
            <div class="card-box p-3 border rounded shadow-sm">
                <h5 class="section-title mb-2 fw-bold">Tentang Ekskul</h5>
                <p style="text-align:justify">{{ $eskul['desc'] }}</p>
            </div>
        </div>

    </section>

    <!-- GALERI -->
    <section class="mb-5">
        <h5 class="fw-bold mb-3">Galeri Ekskul</h5>

        @if(count($eskul['galeri']) > 0)
            <div class="row g-3">
                @foreach($eskul['galeri'] as $foto)
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('images/'.$foto) }}"
                             class="img-fluid rounded shadow"
                             alt="galeri">
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-muted">Belum ada foto galeri.</p>
        @endif
    </section>
<!-- JADWAL -->
<section class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Jadwal Latihan</h5>

        @if(isset($eskul['jadwal']))
        <table class="table table-borderless">
            <tr><td class="fw-semibold">Hari</td><td>{{ $eskul['jadwal']['hari'] }}</td></tr>
            <tr><td class="fw-semibold">Waktu</td><td>{{ $eskul['jadwal']['waktu'] }}</td></tr>
            <tr><td class="fw-semibold">Tempat</td><td>{{ $eskul['jadwal']['tempat'] }}</td></tr>
        </table>
        @else
        <p class="text-muted small">Jadwal belum tersedia.</p>
        @endif
    </div>
</section>
<!-- PRESTASI -->
<section class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Prestasi Ekskul</h5>

        @if(isset($eskul['prestasi']) && count($eskul['prestasi']) > 0)
        <div class="row g-4">
            @foreach($eskul['prestasi'] as $item)
            <div class="col-md-4">
                <img src="{{ asset('images/'.$item['foto']) }}" class="w-100 rounded"
                     style="height:170px; object-fit:cover;">
                <h6 class="fw-bold mt-2">{{ $item['judul'] }}</h6>
                <p class="text-muted small">{{ $item['ket'] }}</p>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-muted small">Belum ada prestasi yang ditampilkan.</p>
        @endif
    </div>
</section>

</main>

<script>
const revealItems=document.querySelectorAll(".reveal");
const obs=new IntersectionObserver((e)=>{
    e.forEach(x=>{ if(x.isIntersecting) x.target.classList.add("show"); });
},{threshold:.2});
revealItems.forEach(r=>obs.observe(r));
</script>

</body>
</html>

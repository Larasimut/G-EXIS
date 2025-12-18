<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Detail Ekskul — {{ $eskul['nama'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
:root{
    --primary:#30475e;
    --bg:#f6f8fb;
    --card:#ffffff;
    --text:#1f2933;
    --muted:#6b7280;
    --border:#e5e9f0;
}

body{
    font-family:"Poppins",sans-serif;
    background:var(--bg);
    color:var(--text);
}

/* HEADER */
.header-eks{
    background:linear-gradient(180deg,#3a526a,#2b3f52);
    padding:32px 0;
    color:#fff;
    box-shadow:0 8px 22px rgba(0,0,0,.22);
}

.header-title-wrap{
    display:flex;
    align-items:center;
    gap:14px;
}

.back-icon{
    color:#ffffff;
    font-size:20px;
    opacity:.85;
    transition:.2s;
    text-decoration:none;
}

.back-icon:hover{
    opacity:1;
    transform:translateX(-2px);
}

.header-title{
    font-size:32px;
    font-weight:600;
    margin:0;
}

.header-sub{
    font-size:14px;
    opacity:.85;
    margin-top:6px;
}

/* BUTTON */
.btn-soft{
    background:#ffffff;
    color:#2b3f52;
    font-weight:600;
    padding:10px 24px;
    border-radius:10px;
    border:none;
    box-shadow:0 4px 12px rgba(0,0,0,.12);
    transition:.2s;
}

.btn-soft:hover{
    background:#f3f6fa;
    transform:translateY(-1px);
}

/* CARD */
.card-box{
    background:var(--card);
    border-radius:14px;
    padding:26px;
    border:1px solid var(--border);
    box-shadow:0 6px 18px rgba(0,0,0,.05);
}

/* SECTION TITLE */
.section-title{
    font-size:20px;
    font-weight:600;
    margin-bottom:18px;
    position:relative;
}

.section-title::after{
    content:"";
    width:52px;
    height:3px;
    background:#94a3b8;
    position:absolute;
    bottom:-6px;
    left:0;
    border-radius:4px;
}

/* PROFILE */
.profile-area img{
    width:200px;
    height:200px;
    object-fit:cover;
    border-radius:12px;
    border:4px solid #fff;
    box-shadow:0 12px 28px rgba(0,0,0,.28);
}

.profile-area h4{
    margin-top:14px;
    font-weight:600;
    color:#2b3f52;
}

/* GALERI */
.gallery img{
    border-radius:12px;
    box-shadow:0 8px 18px rgba(0,0,0,.18);
}

/* TABLE */
.table td{
    padding:10px 0;
    font-size:14px;
}

.table td:first-child{
    width:120px;
    color:var(--muted);
    font-weight:500;
}

/* REVEAL */
.reveal{
    opacity:0;
    transform:translateY(24px);
    transition:.7s ease;
}

.reveal.show{
    opacity:1;
    transform:none;
}
</style>
</head>

<body>

<!-- HEADER -->
<header class="header-eks">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- LEFT : BACK ICON + TITLE -->
        <div>
            <div class="header-title-wrap">
                <a href="{{ url()->previous() }}" class="back-icon">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <h2 class="header-title">{{ $eskul['nama'] }}</h2>
            </div>

        </div>

        <!-- RIGHT : DAFTAR -->
        <a href="{{ route('siswa.formpendaftaran') }}">
            <button class="btn-soft">
                <i class="fa fa-user-plus me-2"></i> Daftar
            </button>
        </a>

    </div>
</header>

<!-- MAIN -->
<main class="container py-5">

    <!-- OVERVIEW -->
    <section class="row align-items-center g-5 mb-5 reveal">

        <div class="col-lg-4 text-center profile-area">
            <img src="{{ asset('images/'.$eskul['logo']) }}" alt="logo">
            <h4>{{ $eskul['nama'] }}</h4>
            <p class="text-muted small">
                {{ $eskul['kategori'] ?? 'Ekstrakurikuler Sekolah' }}
            </p>
        </div>

        <div class="col-lg-8">
            <div class="card-box">
                <h5 class="section-title">Tentang Ekskul</h5>
                <p style="text-align:justify">
                    {{ $eskul['desc'] }}
                </p>
            </div>
        </div>

    </section>

    <!-- GALERI -->
    <section class="mb-5 reveal">
        <h5 class="section-title mb-3">Galeri Ekskul</h5>

        @if(count($eskul['galeri']) > 0)
            <div class="row g-4 gallery">
                @foreach($eskul['galeri'] as $foto)
                    <div class="col-6 col-md-4 col-lg-3">
                        <img src="{{ asset('images/'.$foto) }}" class="img-fluid" alt="galeri">
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
                <tr><td>Hari</td><td>{{ $eskul['jadwal']['hari'] }}</td></tr>
                <tr><td>Waktu</td><td>{{ $eskul['jadwal']['waktu'] }}</td></tr>
                <tr><td>Tempat</td><td>{{ $eskul['jadwal']['tempat'] }}</td></tr>
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
                    <img src="{{ asset('images/'.$item['foto']) }}"
                         class="w-100 rounded"
                         style="height:160px; object-fit:cover;">
                    <h6 class="fw-semibold mt-3">{{ $item['judul'] }}</h6>
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
const observer=new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
        if(e.isIntersecting){
            e.target.classList.add("show");
        }
    });
},{threshold:.15});

revealItems.forEach(el=>observer.observe(el));
</script>

</body>
</html>

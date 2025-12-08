<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Detail Ekskul — Aksara Gridas</title>

<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Crimson+Text:wght@600;700&display=swap" rel="stylesheet">

<style>
/*==================== THEME VARIABLES ====================*/
:root{
    --primary:#14355d;
    --primary-light:#1d4d86;
    --accent:#e4b74d;
    --bg:#f2f5fa;
    --muted:#6e7a86;
}

/*==================== BASE ====================*/
body{
    font-family:"Poppins", sans-serif;
    background:var(--bg);
    color:#24364a;
    scroll-behavior:smooth;
}

/*==================== HEADER ====================*/
.header-eks{
    background:linear-gradient(120deg,var(--primary),#0d2339);
    padding:30px 0;
    color:#fff;
    box-shadow:0 4px 25px rgba(0,0,0,.23);
}
.header-title{
    font-family:"Crimson Text",serif;
    font-size:38px;
    font-weight:700;
}
.header-sub{
    opacity:.85;
}

/*==================== SIDEBAR ====================*/
#sideMenu{
    position:fixed;
    left:-280px;
    top:0;
    width:260px;
    height:100vh;
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(16px);
    border-right:1px solid #dce4ed;
    padding:28px;
    transition:.35s;
    z-index:1200;
}
#sideMenu.active{left:0;}
#sideMenu .nav-link{
    font-weight:600;
    padding:10px 14px;
    border-radius:8px;
    color:#1c2f45;
}
#sideMenu .nav-link:hover{
    background:var(--bg);
}

/* Overlay ketika sidebar terbuka */
#overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.45);
    opacity:0;
    visibility:hidden;
    transition:.35s;
    z-index:1190;
}
#overlay.active{
    opacity:1; visibility:visible;
}

/*==================== SECTION CARD ====================*/
.card-box{
    background:#fff;
    border-radius:18px;
    padding:30px;
    box-shadow:0 6px 22px rgba(0,0,0,.07);
    transition:.3s;
}
.card-box:hover{
    transform:translateY(-4px);
    box-shadow:0 13px 28px rgba(0,0,0,.13);
}
.section-title{
    font-family:"Crimson Text",serif;
    font-size:26px;
    font-weight:700;
    margin-bottom:16px;
    position:relative;
}
.section-title::after{
    content:""; width:60px; height:3px;
    background:var(--accent);
    position:absolute; bottom:-6px; left:0;
    border-radius:6px;
}

/*==================== FOTO PROFILE ====================*/
.profile-area img{
    width:200px;height:200px;
    object-fit:cover;
    border-radius:14px;
    box-shadow:0 5px 18px rgba(0,0,0,.25);
    border:4px solid #fff;
}
@media(max-width:767px){
    .profile-area img{width:150px;height:150px;}
}

/*==================== BUTTON ====================*/
.btn-gold{
    background:var(--accent);
    font-weight:700;
    padding:13px 28px;
    border-radius:10px;
}
.btn-gold:hover{background:#c99c3e;}

/*==================== ANIMASI SCROLL ====================*/
.reveal{opacity:0; transform:translateY(30px); transition:.7s ease;}
.reveal.show{opacity:1; transform:translateY(0);}
</style>
</head>


<body>


<div id="overlay"></div>


<!-- HEADER -->
<header class="header-eks">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-3">
            <button id="btnBurger" class="btn btn-light py-1 px-2"><i class="fa fa-bars"></i></button>
            <div>
                <h2 class="header-title">Aksara Gridas</h2>
                <span class="header-sub">Ekstrakurikuler Literasi & Karya Sastra</span>
            </div>
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
<section id="overview" class="row g-4 align-items-center mb-5 reveal">
    <div class="col-lg-4 text-center profile-area">
        <img src="{{ asset('images/aksaralogo.png') }}" alt="logo">
        <h4 class="mt-3 fw-bold text-primary">Aksara Gridas</h4>
        <p class="text-muted small">Literasi · Sastra · Penalaran</p>
    </div>

    <div class="col-lg-8">
        <div class="card-box">
            <h5 class="section-title">Tentang Ekskul</h5>
            <p style="text-align:justify">
                Aksara Gridas merupakan ekstrakurikuler yang fokus pada dunia literasi dan sastra.
                Siswa diajak mengasah kemampuan menulis, membaca kritis, diskusi karya,
                produksi cerpen, puisi, esai hingga pameran karya. Ekskul ini menjadi wadah
                bagi mereka yang ingin berkembang dalam kreativitas bahasa serta pemikiran.
            </p>
        </div>
    </div>
</section>


<!-- DOKUMENTASI -->
<section id="dokumentasi" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Galeri Dokumentasi</h5>
        <div class="row g-3">
            <div class="col-md-4"><img src="{{ asset('images/aksara.jpg') }}" class="w-100 rounded" style="height:180px;object-fit:cover;"></div>
            <div class="col-md-4"><img src="{{ asset('images/aksara.jpg') }}" class="w-100 rounded" style="height:180px;object-fit:cover;"></div>
            <div class="col-md-4"><img src="{{ asset('images/aksara.jpg') }}" class="w-100 rounded" style="height:180px;object-fit:cover;"></div>
        </div>
    </div>
</section>


<!-- VIDEO -->
<section id="video" class="reveal mb-5 text-center">
    <div class="card-box">
        <h5 class="section-title">Video Dokumentasi</h5>
        <video controls class="rounded border w-100" style="max-width:600px;">
            <source src="{{ asset('video/dp-video.mp4') }}" type="video/mp4">
        </video>
        <p class="text-muted small mt-2">Kegiatan literasi — 2024</p>
    </div>
</section>


<!-- PEMBINA -->
<section id="pembina" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Profil Pembina</h5>
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="{{ asset('images/pembina.jpg') }}" class="rounded mb-2" style="width:150px;height:150px;object-fit:cover;">
            </div>
            <div class="col-md-9">
                <h5 class="fw-bold">Bapak Andika Ramadhan</h5>
                <p style="text-align:justify">
                    Pembina ekskul dengan pengalaman di bidang sastra & literasi.
                    Membimbing siswa dalam penulisan, kritik karya, serta pengembangan karakter kreatif.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- JADWAL -->
<section id="jadwal" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Jadwal Latihan</h5>
        <table class="table table-borderless">
            <tr><td>Hari</td><td>Selasa & Kamis</td></tr>
            <tr><td>Waktu</td><td>15:30 – 17:00 WIB</td></tr>
            <tr><td>Tempat</td><td>Ruang Literasi — Gedung B</td></tr>
        </table>
    </div>
</section>


<!-- PRESTASI -->
<section id="prestasi" class="reveal mb-5">
    <div class="card-box">
        <h5 class="section-title">Prestasi</h5>
        <div class="row g-4">
            <div class="col-md-4">
                <img src="{{ asset('images/prestasi1.jpg') }}" class="w-100 rounded" style="height:170px;object-fit:cover;">
                <h6 class="fw-bold mt-2">Juara Cerpen 2024</h6>
                <p class="text-muted small">Lomba tingkat kabupaten</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/prestasi2.jpg') }}" class="w-100 rounded" style="height:170px;object-fit:cover;">
                <h6 class="fw-bold mt-2">Finalis Puisi Nasional</h6>
                <p class="text-muted small">Masuk 20 besar nasional</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/prestasi3.jpg') }}" class="w-100 rounded" style="height:170px;object-fit:cover;">
                <h6 class="fw-bold mt-2">Pameran Buku 2023–2024</h6>
                <p class="text-muted small">Karya siswa dipamerkan</p>
            </div>
        </div>
    </div>
</section>


<!-- CTA DAFTAR -->
<section id="daftar" class="reveal mb-5 text-center">
    <div class="card-box">
        <h5 class="section-title">Ingin Bergabung?</h5>
        <p class="text-muted">Daftar dan jadilah bagian dari komunitas literasi kreatif.</p>
        <a href="{{ route('siswa.formpendaftaran') }}">
    <button class="btn-gold">
        <i class="fa fa-user-plus me-2"></i> Daftar Sekarang
    </button>
</a>

    </div>
</section>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Sidebar toggle
const burger=document.getElementById("btnBurger");
const side=document.getElementById("sideMenu");
const overlay=document.getElementById("overlay");

burger.onclick=()=>{side.classList.toggle("active");overlay.classList.toggle("active");}
overlay.onclick=()=>{side.classList.remove("active");overlay.classList.remove("active");}

// Reveal animation
const revealItems=document.querySelectorAll(".reveal");
const obs=new IntersectionObserver((e)=>{
    e.forEach(x=>{if(x.isIntersecting)x.target.classList.add("show");});
},{threshold:.2});
revealItems.forEach(r=>obs.observe(r));
</script>
</body>
</html>

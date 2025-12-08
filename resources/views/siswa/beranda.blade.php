<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>G-EXIS Landing Page</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
  <style>

  body {
    background: linear-gradient(to bottom, #ffffff 0%, #e8f4ff 70%, #cfe7ff 100%);
    overflow-x: hidden;
    font-family: "Poppins", sans-serif;
  }

  .welcome-title {
      font-family: "Style Script", cursive;
      font-size: 72px;
      line-height: 0.9;
      color: #1273c5;
      margin-bottom: 10px;
      letter-spacing: 0.6px;
      text-shadow: 0 4px 18px rgba(18,115,197,0.12);
    }
.judul-ekskul {
    font-family: "Caveat Brush", cursive !important;
    font-size: 45px;
    color: #0e3a66;
  }
  .subtitle {
    font-size: 38px;
    font-weight: 700;
    color: #3aa0e6;
    margin-top: -10px;
  }

  .btn-custom {
    background: #7dc9ff;
    padding: 14px 28px;
    border-radius: 15px;
    font-size: 18px;
    font-weight: 600;
    color: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .hero-text-fix {
    margin-top: -50px;
  }

  /* HERO ANIMATION & IMAGE (VERSI TENGAH) */
  .hero-visual {
    position: relative;
    width: 100%;
    max-width: 410px;
    height: 410px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .spin-circle {
    width: 390px;
    height: 400px;
    border: 12px dashed #f4c27a;
    border-radius: 50%;
    position: absolute;
    animation: spin 13s linear infinite;
    z-index: 1;
    top: 6px;
  }

  @keyframes spin {
    from { transform: rotate(0); }
    to { transform: rotate(360deg); }
  }

  .blue-bg-circle {
    width: 350px;
    height: 350px;
    background: #8ec4ee;
    border-radius: 50%;
    position: absolute;
    z-index: 0;
    top: 32px;
  }

 .hero-img {
    width: 500px;      /* perbesar */
    height: 500px;     /* perbesar */
    object-fit: contain; /* biar gambar tidak terpotong */
    position: relative;
    z-index: 50;       /* paling tinggi */
    transform: translateY(-20px); /* sedikit dinaikkan */
    filter: drop-shadow(0px 20px 40px rgba(0,0,0,0.28));
}


  .shadow-base {
    width: 325px;
    height: 78px;
    background: white;
    border-radius: 50%;
    box-shadow: 0px 16px 26px rgba(0,0,0,0.20);
    margin-top: -10px;
  }

  .badge-floating {
    position: absolute;
    background: white;
    border-radius: 40px;
    padding: 9px 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 7px 20px rgba(0,0,0,0.15);
    z-index: 20;
    transform: scale(0.92);
  }

  .badge-top {
    top: -14px;
    right: -55px;
  }

  .badge-bottom {
    bottom: -14px;
    left: -18px;
  }

  @media (max-width: 768px) {
    .hero-visual {
      transform: scale(0.84);
      margin-top: 20px;
    }
    .shadow-base {
      transform: scale(0.84);
      margin-top: -24px;
    }
  }
  .ekskul-box {
  background: white;
  border-radius: 18px;
  overflow: hidden;
  transition: 0.32s;
  border: 1px solid #e7eef5;
}
.ekskul-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 35px rgba(0,0,0,0.10);
}

.ekskul-img {
  width: 100%;
  height: 190px;
  object-fit: cover;
  display: block;
}

.ekskul-tag {
  position: absolute;
  top: 160px; /* ♥ inilah yang bikin posisinya pas */
  left: 14px;
  background: #0e6fdd;
  color: white;
  font-size: 13px;
  padding: 7px 14px;
  border-radius: 10px;
  display: inline-flex;
  gap: 6px;
  align-items: center;
  font-weight: 600;
}

.desc {
  font-size: 14px;
  color: #6f8ea6;
  height: 52px;
}

.read {
  font-size: 14px;
  font-weight: 600;
  color: #0e6fdd;
  text-decoration: none;
}
.read:hover {
  text-decoration: underline;
}

</style>

</head>

<body>
  @include('layouts.navbar')

  <!-- HERO -->
  <div class="container mt-5 pb-5">
    <div class="row align-items-center justify-content-between">

      <!-- TEXT -->
      <div class="col-md-6 hero-text-fix">

        <h1 class="welcome-title">Welcome To</h1>
        <h2 class="subtitle">One System, All Activities.</h2>

        <p class="mt-3 mb-4" style="max-width: 480px;">
          Platform digital yang dirancang khusus untuk memudahkan manajemen ekstrakurikuler di sekolah. Dengan G-EXIS, siswa, pembina, dan pihak sekolah dapat berkomunikasi lebih efektif, mencatat kegiatan secara rapi, serta mengelola keaktifan anggota dengan mudah dan terintegrasi.
        </p>

        <button class="btn btn-custom">Lihat Selengkapnya</button>
      </div>

      <!-- IMAGE & ANIMATION -->
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center mt-5 mt-md-0">
        <div class="hero-visual">
          <div class="spin-circle"></div>
          <div class="blue-bg-circle"></div>

          <img src="{{ asset('images/hd.png') }}" class="hero-img">

          <div class="badge-floating badge-top">
            <span style="font-size:22px;">🏅</span>
            <strong class="text-dark">Sertifikat</strong>
          </div>

          <div class="badge-floating badge-bottom">
            <span style="font-size:22px;">👤</span>
            <div style="text-align:left;">
              <strong class="text-dark">300++</strong><br>
              <span style="font-size:13px; color:gray;">Siswa aktif</span>
            </div>
          </div>
        </div>

        <div class="shadow-base"></div>
      </div>

    </div>
</div>
<!-- EKSKUL SECTION -->
<section class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold judul-ekskul">Ekstrakurikuler Favorit</h1>

            <p style="max-width:430px; font-size:15px; color:#567189;">
                Berbagai ekstrakurikuler terbaik dan favorit dengan pembinaan terbaik untuk mengembangkan bakat siswa.
            </p>
        </div>
        <a href="{{ route('siswa.ekstrakulikuler') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" style="background:#0e6fdd;">
    Lihat Semua Ekskul →
</a>

    </div>

    <div class="row gy-4">
        <!-- Card 1 -->
        <div class="col-md-3">
            <div class="ekskul-box shadow-sm position-relative">
                <img src="{{ asset('images/pramuka.jpg') }}" class="ekskul-img">
                <span class="ekskul-tag"><i class="bi bi-star-fill"></i> Unggulan</span>
                <div class="p-3">
                    <h5 class="fw-bold mb-2">Pramuka</h5>
                    <p class="desc">Melatih jiwa kepemimpinan, kedisiplinan dan kemandirian siswa.</p>
                    <a href="#" class="read">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-3">
            <div class="ekskul-box shadow-sm position-relative">
                <img src="{{ asset('images/pmr.jpg') }}" class="ekskul-img">
                <span class="ekskul-tag"><i class="bi bi-heart-pulse"></i> Medis</span>
                <div class="p-3">
                    <h5 class="fw-bold mb-2">PMR</h5>
                    <p class="desc">Kegiatan pertolongan pertama dan pendidikan kesehatan siswa.</p>
                    <a href="#" class="read">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3">
            <div class="ekskul-box shadow-sm position-relative">
                <img src="{{ asset('images/paskibra.jpg') }}" class="ekskul-img">
                <span class="ekskul-tag"><i class="bi bi-flag-fill"></i> Nasional</span>
                <div class="p-3">
                    <h5 class="fw-bold mb-2">Paskibra</h5>
                    <p class="desc">Pembinaan kedisiplinan serta pelatihan baris-berbaris profesional.</p>
                    <a href="#" class="read">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3">
            <div class="ekskul-box shadow-sm position-relative">
                <img src="{{ asset('images/drumband.jpg') }}" class="ekskul-img">
                <span class="ekskul-tag"><i class="bi bi-music-note-beamed"></i> Seni</span>
                <div class="p-3">
                    <h5 class="fw-bold mb-2">Drum Band</h5>
                    <p class="desc">Pengembangan kreativitas musik dan kekompakan dalam tim.</p>
                    <a href="#" class="read">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- STAT SECTION -->
<section class="py-5" id="statSection"
  style="background:linear-gradient(160deg,#0a2247,#0f356c); color:white; position:relative; overflow:hidden;">

  <!-- Soft Glow -->
  <div class="glow"></div>

  <div class="container text-center">

    <p class="text-uppercase fw-semibold mb-1"
       style="letter-spacing:1px; opacity:.75; font-size:14px;">
       DATA KEGIATAN EKSTRAKULIKULER
    </p>

    <h2 class="fw-bold mb-5" style="font-size:36px; line-height:1.3;">
      Aktivitas yang Kami Jalani Sehari-hari
    </h2>

    <div class="row gy-4 justify-content-center">

      <!-- Item 1 -->
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-people-fill stat-icon"></i>
          <h2 class="stat-number" data-target="578">0</h2>
          <p class="stat-label">Siswa yang ikut ekstrakulikuler</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-trophy stat-icon"></i>
          <h2 class="stat-number" data-target="78">0</h2>
          <p class="stat-label">Kegiatan lomba yang diikuti</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-award stat-icon"></i>
          <h2 class="stat-number" data-target="150">0</h2>
          <p class="stat-label">Kegiatan rutin sekolah</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-lightning stat-icon"></i>
          <h2 class="stat-number" data-target="21">0</h2>
          <p class="stat-label">Ekstrakulikuler aktif berjalan</p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* CARD */
.stat-item {
  padding: 25px 12px;
  border-radius: 16px;
  transition: .35s ease;
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
}

.stat-item:hover {
  background: rgba(255,255,255,0.10);
  transform: translateY(-8px);
  box-shadow: 0 16px 35px rgba(0,0,0,.25);
}

/* ICON */
.stat-icon {
  font-size: 42px;
  margin-bottom: 10px;
  color: #82c8ff;
  opacity: .9;
  animation: floatIcon 3s infinite ease-in-out;
}

/* NUMBER */
.stat-number {
  font-size: 40px;
  font-weight: 800;
  margin: 0;
}

/* LABEL */
.stat-label {
  font-size: 15px;
  margin-top: 6px;
  opacity: .8;
  line-height: 1.4;
}

/* FLOAT */
@keyframes floatIcon {
  0% { transform: translateY(0); }
  50% { transform: translateY(-7px); }
  100% { transform: translateY(0); }
}

/* GLOW */
.glow {
  position:absolute;
  top:-160px;
  left:50%;
  width:480px;
  height:480px;
  background: radial-gradient(circle,#3ba4ff40,#0000);
  filter: blur(65px);
  transform: translateX(-50%);
  pointer-events:none;
}
</style>

<script>
let started = false;
window.addEventListener("scroll", () => {
  const section = document.getElementById("statSection");
  if (!section) return;

  const top = section.getBoundingClientRect().top;

  if (!started && top < window.innerHeight - 150) {
    started = true;

    document.querySelectorAll(".stat-number").forEach(num => {
      let target = +num.getAttribute("data-target");
      let current = 0;
      let speed = target / 70;

      let interval = setInterval(() => {
        current += speed;
        if (current >= target) {
          current = target;
          clearInterval(interval);
        }
        num.innerHTML = Math.floor(current);
      }, 20);
    });
  }
});
</script>
<!-- TESTIMONI SECTION -->
<section class="py-5" style="background:white; position:relative; overflow:hidden;">

  <!-- BULAT BIRU SOFT -->
  <div style="
      position:absolute; width:280px; height:280px;
      background:rgba(0,123,255,0.12);
      border-radius:50%; top:-60px; left:-60px; filter:blur(6px);
  "></div>

  <div style="
      position:absolute; width:350px; height:350px;
      background:rgba(0,140,255,0.10);
      border-radius:50%; bottom:-80px; right:-80px; filter:blur(8px);
  "></div>

  <div class="container text-center position-relative" style="z-index:10;">

    <h2 class="fw-bold mb-3"
    style="font-size: 60px; color:#0a2d52; font-family: 'Caveat Brush', cursive;">
  What They Say?
</h2>

    </h2>
    <p style="opacity:0.8; color:#333;">Pendapat alumni mengenai platform G-EXIS</p>

    <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">

      <!-- CARD 1 -->
      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/dendi.png') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini sangat membantu siswa menemukan kegiatan sesuai bakat.</p>

        <h6 class="testi-name">Dendi Irwansyah</h6>
        <small class="testi-role">Alumni</small>
      </div>

      <!-- CARD 2 -->
      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/air.png') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini sangat membantu siswa mengenal kegiatan ekstrakurikuler.</p>

        <h6 class="testi-name">Syifa Nurmala</h6>
        <small class="testi-role">Alumni</small>
      </div>

      <!-- CARD 3 -->
      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/eva.png') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini menjadi contoh platform digital sekolah yang menarik.</p>

        <h6 class="testi-name">Lani Dianti</h6>
        <small class="testi-role">Alumni</small>
      </div>

    </div>
  </div>
</section>


<style>
/* CARD STYLE */
.testi-card {
  width: 300px;
  padding: 25px;
  border-radius: 20px;
  background: #ffffff;
  box-shadow: 0 10px 25px rgba(0,0,0,0.12);
  transition: 0.35s ease;
  text-align: center;
  border: 1px solid #e8e8e8;
  position: relative;
}

/* Kutip biru */
.quote-icon {
  font-size: 50px;
  color: #0a84ff;
  opacity: 0.25;
  position: absolute;
  top: 10px;
  left: 15px;
}

/* Foto bulat */
.testi-img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
  margin: 10px auto;
  display: block;
}

/* Bintang rating */
.stars {
  text-align: center;
  font-size: 22px;
  color: #ffc107;
  letter-spacing: 3px;
  margin-bottom: 10px;
}

/* Teks testimoni */
.testi-text {
  font-size: 14px;
  color: #444;
  margin-bottom: 15px;
}

/* Nama & role */
.testi-name {
  margin: 0;
  font-weight: 600;
  color: #0a2d52;
}
.testi-role {
  color: #777;
}

/* Hover effect */
.testi-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 14px 35px rgba(0,0,0,0.18);
}
</style>
 @include('layouts.footer')

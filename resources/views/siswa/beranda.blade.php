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

  <style>
    body {
      background: linear-gradient(to bottom, #ffffff 0%, #e8f4ff 70%, #cfe7ff 100%);
      overflow-x: hidden;
      font-family: "Poppins", sans-serif;
    }
    /* HERO TEXT */
    .welcome-title {
      font-family: "Pacifico", cursive;
      font-size: 48px;
      color: #1273c5;
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

    /* HERO ANIMATION */
    .spin-circle {
      width: 440px;
      height: 440px;
      border: 12px dashed #f4c27a;
      border-radius: 50%;
      position: absolute;
      animation: spin 13s linear infinite;
      z-index: 1;
    }
    @keyframes spin { from { transform: rotate(0); } to { transform: rotate(360deg);} }

    .blue-bg-circle {
      width: 390px;
      height: 390px;
      background: #8ec4ee;
      border-radius: 50%;
      position: absolute;
      z-index: 0;
    }

    .shadow-base {
      width: 620px;
      height: 140px;
      background: white;
      border-radius: 50%;
      box-shadow: 0px 18px 32px rgba(0,0,0,0.25);
      margin-top: -60px;
    }

    .badge-floating {
      position: absolute;
      background: white;
      border-radius: 40px;
      padding: 10px 18px;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 8px 22px rgba(0,0,0,0.15);
      z-index: 20;
    }

    /* EKSKUL SECTION */
    .ekskul-wrapper {
      background: #eaf1f9;
      padding: 50px;
      border-radius: 20px;
      max-width: 1000px;
      margin: auto;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .ekskul-container {
      height: 260px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      gap: 40px;
    }

    .ekskul-card {
      width: 180px;
      height: 240px;
      border-radius: 22px;
      overflow: hidden;
      position: relative;
      box-shadow: 0px 10px 25px rgba(0,0,0,0.18);
      transition: 0.3s ease;
    }

    .ekskul-card.big {
      width: 220px;
      height: 270px;
      z-index: 3;
    }

    .img-card {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 14px 0;
      text-align: center;
      background: linear-gradient(transparent, rgba(0,0,0,0.55));
      color: white;
    }

    .overlay h5 {
      margin-bottom: 6px;
      font-size: 20px;
      font-weight: 600;
    }

    .ekskul-card:hover {
      transform: scale(1.06);
      z-index: 5;
    }
  </style>
</head>

<body>
@include('layouts.navbar')

  <!-- HERO -->
  <div class="container mt-5 pb-5">
    <div class="row align-items-center">

      <div class="col-md-6">
        <h1 class="welcome-title">Welcome To</h1>
        <h2 class="subtitle">One System, All Activities.</h2>

        <p class="mt-3 mb-4" style="max-width: 480px;">
          Platform digital yang dirancang khusus untuk memudahkan manajemen ekstrakurikuler di sekolah. Dengan G-EXIS, siswa, pembina, dan pihak sekolah dapat berkomunikasi lebih efektif, mencatat kegiatan secara rapi, serta mengelola keaktifan anggota dengan mudah dan terintegrasi."
        </p>

        <button class="btn btn-custom">Lihat Selengkapnya</button>
      </div>
<br> <br>
      <div class="col-md-6 d-flex justify-content-center align-items-center position-relative mt-5 mt-md-0">
        <div class="spin-circle"></div>
        <div class="blue-bg-circle"></div>

        <div style="position:relative; z-index:10;">
         <img src="{{ asset('images/drumband.jpg') }}"
               style="width:350px; height:350px; object-fit:cover; border-radius:50%; box-shadow:0px 12px 25px rgba(0,0,0,0.32);"/>

          <div class="badge-floating" style="top:-15px; right:-40px;">
            <span style="font-size:22px;">🏅</span>
            <strong class="text-dark">Sertifikat</strong>
          </div>

          <div class="badge-floating" style="bottom:-25px; left:-40px;">
            <span style="font-size:22px;">👤</span>
            <div style="text-align:left;">
              <strong class="text-dark">300++</strong><br>
              <span style="font-size:13px; color:gray;">Siswa aktif</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="d-flex justify-content-center">
    <div class="shadow-base"></div>
  </div>

  <!-- EKSKUL SECTION -->
  <section class="container my-5 py-5">

    <div class="text-center mb-5">
      <h2 class="fw-bold" style="font-size: 38px; color: #0e3a66;">Ekstrakulikuler</h2>
      <h3 style="font-size: 30px; color: #4a86b8; font-family: 'Pacifico', cursive; margin-top: -8px;">
        Favorit
      </h3>
    </div>

    <div class="ekskul-wrapper">
      <div class="ekskul-container">

        <div class="ekskul-card">
          <img src="{{ asset('images/pmr.jpg') }}" class="img-card" />
          <div class="overlay">
            <h5>PMR</h5>
            <button class="btn btn-primary btn-sm">Lihat..</button>
          </div>
        </div>

        <div class="ekskul-card">
          <img src="{{ asset('images/tari.jpg') }}" class="img-card" />
          <div class="overlay">
            <h5>Seni Tari</h5>
            <button class="btn btn-primary btn-sm">Lihat..</button>
          </div>
        </div>

        <div class="ekskul-card big">
          <img src="{{ asset('images/pramuka.jpg') }}" class="img-card" />
          <div class="overlay">
            <h5>Pramuka</h5>
            <button class="btn btn-primary btn-sm">Lihat..</button>
          </div>
        </div>

        <div class="ekskul-card">
          <img src="{{ asset('images/paskib.jpg') }}" class="img-card" />
          <div class="overlay">
            <h5>Paskibra</h5>
            <button class="btn btn-primary btn-sm">Lihat..</button>
          </div>
        </div>

        <div class="ekskul-card">
          <img src="{{ asset('images/drumband.jpg') }}" class="img-card" />
          <div class="overlay">
            <h5>Drum Band</h5>
            <button class="btn btn-primary btn-sm">Lihat..</button>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- GRADIENT BOTTOM SHAPE -->
<!-- STAT SECTION — WAVE PROGRESS BAR -->
<section class="py-5" id="statSection" style="background:#79a8d8; color:white;">
  <style>
    .stat-card {
      background: rgba(255,255,255,0.25);
      border-radius: 18px;
      width: 260px;
      height: 180px;
      position: relative;
      overflow: hidden;
      backdrop-filter: blur(6px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.20);
      transition: transform .4s;
    }
    .stat-card:hover { transform: translateY(-6px); }

    .wave {
      position:absolute;
      bottom:-10px;
      width:200%;
      height:100%;
      background: rgba(255,255,255,0.55);
      border-radius:45%;
      animation: waveMove 5s infinite linear;
      transform: translateX(-25%);
    }
    @keyframes waveMove { from { transform: translateX(-25%) rotate(0deg); } to { transform: translateX(-25%) rotate(360deg); } }

    .float-icon { animation: floatIcon 3s infinite ease-in-out; }
    @keyframes floatIcon { 0% { transform: translateY(0); } 50% { transform: translateY(-10px);} 100% { transform: translateY(0);} }

    .stat-number {
      font-size: 42px;
      font-weight: 800;
      line-height: 1;
    }
  </style>

  <div class="container d-flex justify-content-center gap-4 flex-wrap text-center">

    <!-- Card 1 -->
    <div class="stat-card d-flex flex-column justify-content-center align-items-center">
      <div class="wave"></div>
      <i class="bi bi-person-fill fs-1 float-icon"></i>
      <h2 class="stat-number" data-target="87">0%</h2>
      <p class="fw-bold m-0">Active Students</p>
    </div>

    <!-- Card 2 -->
    <div class="stat-card d-flex flex-column justify-content-center align-items-center">
      <div class="wave"></div>
      <i class="bi bi-people-fill fs-1 float-icon"></i>
      <h2 class="stat-number" data-target="23">0</h2>
      <p class="fw-bold m-0">Ekskul Terdaftar</p>
    </div>

    <!-- Card 3 -->
    <div class="stat-card d-flex flex-column justify-content-center align-items-center">
      <div class="wave"></div>
      <i class="bi bi-award-fill fs-1 float-icon"></i>
      <h2 class="stat-number" data-target="50">0</h2>
      <p class="fw-bold m-0">Sertifikat</p>
    </div>

  </div>
</section>

<script>
  // animasi angka hanya berjalan saat section terlihat di layar
  let started = false;
  window.addEventListener("scroll", () => {
    const section = document.getElementById("statSection");
    const sectionTop = section.getBoundingClientRect().top;
    if (!started && sectionTop < window.innerHeight - 100) {
      started = true;
      document.querySelectorAll(".stat-number").forEach(num => {
        let target = +num.getAttribute("data-target");
        let current = 0;
        let increment = target / 90;
        let interval = setInterval(() => {
          current += increment;
          if (current >= target) {
            current = target;
            clearInterval(interval);
          }
          num.innerHTML = target === 87 ? Math.floor(current) + "%" : Math.floor(current);
        }, 20);
      });
    }
  });
</script>

<!-- TESTIMONI SECTION -->
<section class="py-5" style="background: linear-gradient(135deg, #0a2d52, #0d3a66); color:white; position:relative; overflow:hidden;">

  <!-- Ornamen Bulat -->
  <div style="
      position:absolute; width:280px; height:280px;
      background:rgba(255,255,255,0.07);
      border-radius:50%; top:-60px; left:-60px; filter:blur(4px);
  "></div>

  <div style="
      position:absolute; width:350px; height:350px;
      background:rgba(255,255,255,0.05);
      border-radius:50%; bottom:-80px; right:-80px; filter:blur(6px);
  "></div>

  <div class="container text-center position-relative" style="z-index:10;">

    <h2 class="fw-bold mb-3" style="font-size: 38px; letter-spacing:1px;">
      What They Say?
    </h2>
    <p style="opacity:0.8">Pendapat alumni mengenai platform G-EXIS</p>

    <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">

      <!-- CARD 1 -->
      <div class="glass-card">
        <div class="d-flex align-items-center gap-2">
          <img src="{{ asset('images/pmr.jpg') }}" class="rounded-circle" width="50">
          <div>
            <h6 class="mb-0 fw-semibold">Dendi Irwansyah</h6>
            <small style="opacity:0.8;">Alumni</small>
          </div>
        </div>
        <p class="mt-3">Website ini sangat membantu siswa menemukan kegiatan sesuai bakat.</p>
        <div class="rating">★★★★★</div>
      </div>

      <!-- CARD 2 -->
      <div class="glass-card">
        <div class="d-flex align-items-center gap-2">
          <img src="{{ asset('images/tari.jpg') }}" class="rounded-circle" width="50">
          <div>
            <h6 class="mb-0 fw-semibold">Syifa Nurmala</h6>
            <small style="opacity:0.8;">Alumni</small>
          </div>
        </div>
        <p class="mt-3">Website ini sangat membantu siswa mengenal kegiatan ekstrakurikuler.</p>
        <div class="rating">★★★★★</div>
      </div>

      <!-- CARD 3 -->
      <div class="glass-card">
        <div class="d-flex align-items-center gap-2">
          <img src="{{ asset('images/pramuka.jpg') }}" class="rounded-circle" width="50">
          <div>
            <h6 class="mb-0 fw-semibold">Lani Dianti</h6>
            <small style="opacity:0.8;">Alumni</small>
          </div>
        </div>
        <p class="mt-3">Website ini menjadi contoh platform digital sekolah yang menarik.</p><br>
        <div class="rating">★★★★★</div>
      </div>

    </div>
  </div>
</section>

<style>
/* Card Glass Effect */
.glass-card {
  width: 270px;
  padding: 22px;
  border-radius: 22px;
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(12px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.22);
  color: white;
  transition: 0.35s ease;
  text-align: left;
  border: 1px solid rgba(255,255,255,0.2);
}
.glass-card img {
  width: 55px;       /* bebas mau 40–70px */
  height: 55px;
  border-radius: 50%;
  object-fit: cover; /* gambar auto crop, tidak distorsi */
  object-position: center;
  display: block;    /* jaga proporsi rapi */
}


/* Hover elegan */
.glass-card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 12px 32px rgba(0,0,0,0.35);
  background: rgba(255,255,255,0.18);
}

/* Rating Bintang */
.rating {
  font-size: 20px;
  color: #ffdd57;
  letter-spacing: 2px;
}
</style>
<footer class="py-5 border-top"
        style="background: linear-gradient(to right, #ffffff, #e8f3ff); width:100%; overflow:hidden; position:relative;">

    <!-- WAVE SEBAGAI BACKGROUND KIRI -->
    <img src="{{ asset('images/hias.png') }}" alt="Wave"
         style="
            position:absolute;
            top:0;
            left:0;
            height:100%;
            width:auto;
            z-index:1;
         ">

    <!-- KONTEN FOOTER DI ATAS WAVE -->
    <div style="position:relative; z-index:2; padding-left:170px;">

        <!-- LOGO & TEXT -->
        <div class="d-flex align-items-center mb-2">
            <img src="{{ asset('images/logoGe.png') }}" alt="Logo" style="height:55px;">
            <h2 class="ms-2 mb-0 fw-bold text-primary">- EXIS</h2>
        </div>

        <h3 class="fw-bold text-dark" style="margin-top:-5px;">SMKN 2 SUMEDANG</h3>

        <!-- INFO -->
        <p class="mt-3 mb-1">
            Jl. Prabu Gajah Agung No. 12 <br>
            Kabupaten Sumedang, Jawa Barat 45111
        </p>

        <p class="mb-1">
            <i class="bi bi-telephone-fill text-danger me-2"></i> (0261) 123456
        </p>

        <p class="mb-1">
            <i class="bi bi-envelope-fill text-primary me-2"></i> info@smkn2sumedang.sch.id
        </p>

        <!-- CHAT BUTTON -->
        <a href="#"
           class="btn btn-primary px-4 py-2 shadow mt-4 d-inline-flex align-items-center gap-2"
           style="border-radius:10px;">
            <i class="bi bi-chat-dots-fill"></i> Chat Admin
        </a>

        <!-- COPYRIGHT -->
<div class="text-center mt-4 pt-3 border-top">
    <small class="text-secondary">
        © 2025 <strong>G-EXIS</strong> | Dikembangkan oleh Tim IT Gridas <br>
        Versi 1.0 – Semua Hak Dilindungi
    </small>
</div>


    </div>
</footer>

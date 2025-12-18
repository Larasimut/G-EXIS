<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>G-EXIS Landing Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
</head>

<body>
  @include('layouts.navbar')

  <div class="container mt-5 pb-5">
    <div class="row align-items-center justify-content-between">

      <div class="col-md-6 hero-text-fix">

        <h1 class="welcome-title">Welcome To</h1>
        <h2 class="subtitle">One System, All Activities.</h2>

        <p class="mt-3 mb-4" style="max-width: 480px;">
          Platform digital yang dirancang khusus untuk memudahkan manajemen ekstrakurikuler di sekolah. Dengan G-EXIS, siswa, pembina, dan pihak sekolah dapat berkomunikasi lebih efektif, mencatat kegiatan secara rapi, serta mengelola keaktifan anggota dengan mudah dan terintegrasi.
        </p>

        <button class="btn btn-custom">Lihat Selengkapnya</button>
      </div>

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

<section class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold judul-ekskul">Ekstrakulikuler Favorit</h1>

            <p style="max-width:430px; font-size:15px; color:#567189;">
                Berbagai ekstrakurikuler terbaik dan favorit dengan pembinaan terbaik untuk mengembangkan bakat siswa.
            </p>
        </div>
        <a href="{{ route('siswa.ekstrakulikuler') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" style="background:#0e6fdd;">
    Lihat Semua Ekskul →
</a>

    </div>

    <div class="row gy-4">

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


        <div class="col-md-3">
            <div class="ekskul-box shadow-sm position-relative">
                <img src="{{ asset('images/paskib.jpg') }}" class="ekskul-img">
                <span class="ekskul-tag"><i class="bi bi-flag-fill"></i> Nasional</span>
                <div class="p-3">
                    <h5 class="fw-bold mb-2">Paskibra</h5>
                    <p class="desc">Pembinaan kedisiplinan serta pelatihan baris-berbaris profesional.</p>
                    <a href="#" class="read">Lihat Selengkapnya →</a>
                </div>
            </div>
        </div>


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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<section class="py-5" id="statSection"
  style="background:linear-gradient(160deg,#0a2247,#0f356c); color:white; position:relative; overflow:hidden;">

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

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-people-fill stat-icon"></i>
          <h2 class="stat-number" data-target="300">0</h2>
          <p class="stat-label">Siswa yang ikut ekstrakulikuler</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-trophy stat-icon"></i>
          <h2 class="stat-number" data-target="29">0</h2>
          <p class="stat-label">Kegiatan lomba yang diikuti</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="stat-item">
          <i class="bi bi-award stat-icon"></i>
          <h2 class="stat-number" data-target="21">0</h2>
          <p class="stat-label">Kegiatan rutin sekolah</p>
        </div>
      </div>

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

<section class="py-5" style="background:white; position:relative; overflow:hidden;">

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
    <p style="opacity:0.8; color:#333;">Pendapat para siswa mengenai platform G-EXIS</p>

    <div class="d-flex justify-content-center flex-wrap gap-4 mt-4">

      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/mugni.jpeg') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini sangat membantu siswa menemukan kegiatan sesuai bakat.</p>

        <h6 class="testi-name">Mugni Tiarani</h6>
        <small class="testi-role">Siswa</small>
      </div>


      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/larass.jpg') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini sangat membantu siswa mengenal kegiatan ekstrakurikuler.</p>

        <h6 class="testi-name">Larasati Indriani</h6>
        <small class="testi-role">Siswa</small>
      </div>


      <div class="testi-card">
        <div class="quote-icon">❝</div>

        <img src="{{ asset('images/nadia.png') }}" class="testi-img">

        <div class="stars">★★★★★</div>

        <p class="testi-text">Website ini menjadi contoh platform digital sekolah yang menarik.</p>

        <h6 class="testi-name">Nadia Denis</h6>
        <small class="testi-role">Siswa</small>
      </div>

    </div>
  </div>
</section>

 @include('layouts.footer')

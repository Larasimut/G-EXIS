<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Detail Ekskul — Design & Printing</title>

<!-- Bootstrap & FontAwesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
  :root{
    --blue-900: #2f4761;
    --blue-700: #3e5978;
    --accent: #4a76a8;
  }
  body{
    background: linear-gradient(180deg,#eef5fb,#e5eef9);
    font-family: "Poppins",sans-serif;
    color: #163247;
    scroll-behavior: smooth;
  }

  /* HEADER */
  .header-eks{
    background: linear-gradient(135deg,var(--blue-700),var(--blue-900));
    color: #fff;
    padding: 28px 0;
  }
  .header-eks .title{
    margin:0;
    font-weight:700;
    letter-spacing:0.3px;
  }
  .hdr-actions i{ font-size:20px; cursor:pointer; }

  /* SIDEBAR (slide from left) */
  .side-menu {
    position: fixed;
    left: -300px;
    top: 0;
    width: 300px;
    height: 100vh;
    background: linear-gradient(180deg,#fff,#f2f7ff);
    box-shadow: 4px 0 30px rgba(18,44,74,0.08);
    padding: 22px;
    z-index: 1055;
    transition: all .35s ease;
  }
  .side-menu.active{ left: 0; }
  .side-menu .logo{
    display:flex;align-items:center;gap:12px;margin-bottom:18px;
  }
  .side-menu .nav-link { color:var(--blue-900); font-weight:600; }

  /* MAIN LAYOUT */
  .container-main { margin-top: -28px; } /* overlay hero */

  .card-section {
    background:#fff;border-radius:12px;padding:22px;box-shadow:0 6px 18px rgba(22,50,80,0.06);
  }

  .profile-area img{
    width:220px;height:220px;object-fit:cover;border-radius:8px;border:6px solid #fff;
    box-shadow:0 6px 18px rgba(34,63,99,0.12);
  }

  .section-title { color:var(--blue-900); font-weight:700; margin-bottom:14px; }
  .label { color:var(--blue-900); font-weight:600; }

  .badge-jadwal { background:var(--accent); color:white; padding:8px 12px; border-radius:8px; display:inline-block; }

  /* Carousel gallery styling */
  .carousel .carousel-caption { left:1rem; right:1rem; bottom:1rem; text-align:left; background:rgba(15,30,50,0.55); padding:8px 12px; border-radius:8px; font-size:14px; }
  .carousel .carousel-item img{ height:420px; object-fit:cover; border-radius:8px; }

  /* Article card for prestasi */
  .prestasi-card img{ height:200px; object-fit:cover; }
  .prestasi-carousel .carousel-item{ padding:12px 0; }

  /* CTA daftar */
  .btn-daftar { background:var(--accent); color:white; padding:12px 26px; border-radius:10px; font-weight:600; }
  .btn-daftar:hover{ background:#3a6a96; }

  /* Smooth reveal on scroll */
  .reveal { opacity:0; transform: translateY(18px); transition: all .6s ease; }
  .reveal.visible { opacity:1; transform: translateY(0); }

  /* responsive tweaks */
  @media (max-width:767px){
    .profile-area img{ width:140px;height:140px; }
    .carousel .carousel-item img{ height:220px; }
  }

  /* small utilities */
  .muted { color:#5b6b7a; }
</style>
</head>

<body>

<!-- SIDEBAR -->
<div id="sideMenu" class="side-menu">
  <div class="logo">
    <img src="img/logo-dp.png" alt="logo" width="52" height="52" style="object-fit:cover">
    <div>
      <div style="font-weight:700;color:var(--blue-900)">G-EXIS</div>
      <small class="muted">Sistem Ekstrakurikuler</small>
    </div>
  </div>

  <nav class="nav flex-column">
    <a class="nav-link mb-2" href="#overview">Overview</a>
    <a class="nav-link mb-2" href="#dokumentasi">Dokumentasi</a>
    <a class="nav-link mb-2" href="#video">Video</a>
    <a class="nav-link mb-2" href="#pembina">Pembina</a>
    <a class="nav-link mb-2" href="#jadwal">Jadwal</a>
    <a class="nav-link mb-2" href="#prestasi">Prestasi</a>
    <a class="nav-link text-danger mt-3" href="#daftar">Daftar Ekskul</a>
    <hr>
    <small class="muted">Support</small>
    <a class="nav-link mt-2" href="mailto:sekretariat@g-exis.sch.id">Kontak Sekretariat</a>
  </nav>
</div>

<!-- HEADER -->
<header class="header-eks">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-3">
      <button id="btnBurger" class="btn btn-outline-light border-0 p-2" aria-label="menu">
        <i class="fa fa-bars"></i>
      </button>
      <div>
        <h2 class="title mb-0">Design & Printing</h2>
        <small class="muted">Ekstrakurikuler — Kreatif & Profesional</small>
      </div>
    </div>

    <div class="hdr-actions d-flex align-items-center gap-3">
      <button class="btn btn-outline-light border-0" title="Kembali" onclick="history.back()">
        <i class="fa fa-arrow-left"></i>
      </button>
      <button id="btnDaftarTop" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalDaftar">
        <i class="fa fa-check-circle me-1"></i> Daftar
      </button>
    </div>
  </div>
</header>

<!-- MAIN -->
<main class="container container-main mt-4 mb-5">

  <!-- INTRO -->
  <section id="overview" class="row g-4 align-items-center reveal">
    <div class="col-lg-4 text-center profile-area">
      <img src="img/logo-dp.png" alt="logo ekskul" class="img-fluid rounded shadow-sm">
      <h4 class="mt-3" style="color:var(--blue-900);font-weight:700">Design & Printing</h4>
      <p class="muted">Eksplorasi desain grafis, percetakan, dan produksi kreatif</p>
      <div class="mt-3">
        <button class="btn-daftar" data-bs-toggle="modal" data-bs-target="#modalDaftar">Daftar Ekskul Sekarang</button>
      </div>
    </div>

    <div class="col-lg-8">
      <div class="card-section">
        <h5 class="section-title">Tentang Ekskul</h5>
        <p class="muted" style="text-align:justify">
          Design & Printing adalah ekstrakurikuler yang fokus pada pengembangan keterampilan desain visual, editing,
          serta proses produksi cetak. Anggota belajar dari konsep visual hingga eksekusi produksi untuk event sekolah.
        </p>

        <div class="row mt-3">
          <div class="col-md-6">
            <h6 class="label">Pembina</h6>
            <div class="mt-2 d-flex gap-3 align-items-center">
              <img src="img/pmr.jpg" alt="pembina" width="64" height="64" style="object-fit:cover;border-radius:8px;">
              <div>
                <div style="font-weight:700">Bapak Andika Ramadhan</div>
                <div class="muted small">Pembina Design & Printing</div>
                <div class="muted small">WA: 0812-3456-7890</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <h6 class="label">Kontak & Lokasi</h6>
            <div class="mt-2">
              <div class="muted small">Lab Multimedia — Gedung A Lantai 2</div>
              <div class="mt-2"><span class="badge-jadwal">Selasa & Kamis • 15:30–17:00</span></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- DOKUMENTASI (carousel) -->
  <section id="dokumentasi" class="mt-4 reveal">
    <div class="card-section">
      <h5 class="section-title">Dokumentasi Foto</h5>

      <div id="carouselDok" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/pmr.jpg" class="d-block w-100 rounded" alt="">
            <div class="carousel-caption text-start">
              Siswa sedang proses produksi merchandise untuk event sekolah (20 Nov 2024)
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/paskib.jpg" class="d-block w-100 rounded" alt="">
            <div class="carousel-caption text-start">
              Workshop software desain bersama pembina (12 Okt 2024)
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/paskib.png" class="d-block w-100 rounded" alt="">
            <div class="carousel-caption text-start">
              Pameran hasil karya siswa pada expo sekolah (5 Sep 2024)
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDok" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselDok" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

      <p class="muted mt-3 fst-italic">Keterangan: klik gambar untuk melihat caption kegiatan.</p>
    </div>
  </section>

  <!-- VIDEO -->
  <section id="video" class="mt-4 reveal">
    <div class="card-section">
      <h5 class="section-title">Video Dokumentasi</h5>
      <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
        <iframe src="https://www.youtube.com/embed/ysz5S6PUM-U" title="Video Dokumentasi" allowfullscreen></iframe>
      </div>
      <p class="muted mt-2">Liputan workshop & kompetisi — 12 Oktober 2024</p>

      <!-- penjelasan kegiatan di bawah video -->
      <div class="mt-3">
        <h6 class="label">Kegiatan Pada Video</h6>
        <p class="muted" style="text-align:justify">
          Pada video ini terlihat rangkaian workshop pembuatan poster dan merchandise untuk event sekolah.
          Peserta mempelajari teknik layout, pemilihan tipografi, serta workflow produksi printing.
        </p>
      </div>
    </div>
  </section>

  <!-- PEMBINA -->
  <section id="pembina" class="mt-4 reveal">
    <div class="card-section">
      <h5 class="section-title">Tentang Pembina</h5>

      <div class="row align-items-center">
        <div class="col-md-3 text-center">
          <img src="img/pembina.jpg" width="150" height="150" style="object-fit:cover;border-radius:8px;">
        </div>
        <div class="col-md-9">
          <h5 class="fw-bold">Bapak Andika Ramadhan</h5>
          <p class="muted" style="text-align:justify">
            Bapak Andika adalah praktisi desain grafis yang aktif dalam industri kreatif.
            Beliau sering berkolaborasi dengan komunitas lokal dan membawa pengalaman profesional ke ekskul.
          </p>
          <p class="muted"><i class="fa fa-envelope me-2"></i>andika.r@example.com • <i class="fa fa-phone ms-3 me-2"></i>0812-3456-7890</p>
        </div>
      </div>

    </div>
  </section>

  <!-- JADWAL RINCI -->
  <section id="jadwal" class="mt-4 reveal">
    <div class="card-section">
      <h5 class="section-title">Jadwal Rinci</h5>
      <table class="table table-borderless">
        <tbody>
          <tr><td class="label">Hari</td><td>Selasa & Kamis</td></tr>
          <tr><td class="label">Waktu</td><td>15:30 – 17:00 WIB</td></tr>
          <tr><td class="label">Tempat</td><td>Lab Multimedia — Gedung A Lt.2</td></tr>
          <tr><td class="label">Catatan</td><td>Datang 10 menit lebih awal; bawa laptop bila ada tugas digital.</td></tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- PRESTASI = ARTICLE CAROUSEL -->
  <section id="prestasi" class="mt-4 reveal">
    <div class="card-section">
      <h5 class="section-title">Prestasi & Artikel</h5>

      <div id="prestasiCarousel" class="carousel slide prestasi-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="row g-3 align-items-center">
              <div class="col-md-5">
                <img src="img/prestasi1.jpg" class="w-100 rounded" alt="">
              </div>
              <div class="col-md-7">
                <h5 class="fw-bold">Juara 1 Lomba Poster Digital Tingkat Kabupaten 2024</h5>
                <p class="muted" style="text-align:justify">
                  Tim Design & Printing memenangkan lomba poster bertema "Youth Creative Culture".
                  Kemenangan ini menegaskan kualitas konsep dan eksekusi visual siswa. Lihat ringkasan lomba dan proses kreatif di artikel ini.
                </p>
                <a href="#" class="text-decoration-none">Baca selengkapnya →</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row g-3 align-items-center">
              <div class="col-md-5">
                <img src="img/pramuka.jpg" class="w-100 rounded" alt="">
              </div>
              <div class="col-md-7">
                <h5 class="fw-bold">Finalis Nasional Kompetisi Desain Logo 2023</h5>
                <p class="muted" style="text-align:justify">
                  Ekskul lolos sampai babak final nasional dengan desain logo "Digital Empowerment".
                  Artikel ini membahas proses ideasi, teknik yang digunakan, dan pengalaman peserta.
                </p>
                <a href="#" class="text-decoration-none">Baca selengkapnya →</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row g-3 align-items-center">
              <div class="col-md-5">
                <img src="img/paskib.jpg" class="w-100 rounded" alt="">
              </div>
              <div class="col-md-7">
                <h5 class="fw-bold">Produksi Merchandise Resmi Event Sekolah (2022–2025)</h5>
                <p class="muted" style="text-align:justify">
                  Selama tiga tahun berturut-turut, ekskul dipercaya memproduksi merchandise resmi sekolah.
                  Artikel menyajikan studi kasus produksi, tantangan, dan hasil akhir yang memuaskan.
                </p>
                <a href="#" class="text-decoration-none">Baca selengkapnya →</a>
              </div>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#prestasiCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#prestasiCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

    </div>
  </section>

  <!-- FOOTER CTA -->
  <section id="daftar" class="mt-4 reveal">
    <div class="card-section text-center">
      <h5 class="section-title">Tertarik Bergabung?</h5>
      <p class="muted">Daftar sekarang untuk bergabung dengan Design & Printing — tempat belajar praktis & profesional.</p>
      <button class="btn-daftar" data-bs-toggle="modal" data-bs-target="#modalDaftar"><i class="fa fa-user-plus me-2"></i>Daftar Ekskul Sekarang</button>
    </div>
  </section>

</main>

<!-- MODAL DAFTAR -->
<div class="modal fade" id="modalDaftar" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form id="formDaftar" class="needs-validation" novalidate>
        <div class="modal-header">
          <h5 class="modal-title">Form Pendaftaran Ekskul</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control" required>
            <div class="invalid-feedback">Masukkan nama lengkapmu.</div>
          </div>

          <div class="mb-3 row">
            <div class="col">
              <label class="form-label">NIS</label>
              <input name="nis" type="text" class="form-control" required pattern="\d+">
              <div class="invalid-feedback">Masukkan NIS (angka).</div>
            </div>
            <div class="col">
              <label class="form-label">Kelas</label>
              <input name="kelas" type="text" class="form-control" required>
              <div class="invalid-feedback">Masukkan kelas (contoh: 12 RPL).</div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">No. WhatsApp</label>
            <input name="wa" type="tel" class="form-control" required>
            <div class="invalid-feedback">Masukkan nomor WA yang bisa dihubungi.</div>
          </div>

          <div class="mb-3">
            <label class="form-label">Kenapa mau bergabung?</label>
            <textarea name="alasan" class="form-control" rows="3" required></textarea>
            <div class="invalid-feedback">Tuliskan alasan singkat.</div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index:1200">
  <div id="liveToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">Pendaftaran berhasil dikirim. Terima kasih!</div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="close"></button>
    </div>
  </div>
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Sidebar toggle
  const sideMenu = document.getElementById('sideMenu');
  document.getElementById('btnBurger').addEventListener('click', ()=> sideMenu.classList.toggle('active'));

  // Close sidebar when clicking nav-link (mobile-friendly)
  sideMenu.querySelectorAll('.nav-link').forEach(a=>{
    a.addEventListener('click', ()=> sideMenu.classList.remove('active'));
  });

  // Reveal on scroll (IntersectionObserver)
  const reveals = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting) e.target.classList.add('visible');
    });
  }, {threshold: 0.12});
  reveals.forEach(r=> io.observe(r));

  // Form validation & toast
  const form = document.getElementById('formDaftar');
  form.addEventListener('submit', function(e){
    e.preventDefault();
    e.stopPropagation();
    if (!form.checkValidity()) {
      form.classList.add('was-validated');
      return;
    }

    // Simulasi pengiriman (ganti dengan fetch/ajax ke backend)
    const toastEl = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastEl);
    // close modal dulu
    const modalEl = document.getElementById('modalDaftar');
    const modal = bootstrap.Modal.getInstance(modalEl);
    if(modal) modal.hide();

    // reset form
    form.reset();
    form.classList.remove('was-validated');

    // show toast
    toast.show();
  });

  // Optional: improve carousel interval
  const carDok = document.getElementById('carouselDok');
  if(carDok) new bootstrap.Carousel(carDok, { interval: 5000, ride: 'carousel' });

  const carPrest = document.getElementById('prestasiCarousel');
  if(carPrest) new bootstrap.Carousel(carPrest, { interval: 7000, ride: false });

  // Accessibility: close sidebar on Esc
  document.addEventListener('keydown', (ev)=>{
    if(ev.key === 'Escape') sideMenu.classList.remove('active');
  });
</script>
</body>
</html>

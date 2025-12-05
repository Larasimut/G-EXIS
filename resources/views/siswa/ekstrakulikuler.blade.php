<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #eef6ff, #d7eaff);
            font-family: "Poppins", sans-serif;
        }
        /* TITLE */
        .eskul-title {
            font-family: 'Pacifico', cursive;
            font-size: 2.6rem;
            color: #1b4a70;
        }

        /* ESKUL CARD */
        .eskul-card {
            position: relative;
            height: 230px;
            border-radius: 18px;
            overflow: hidden;
            cursor: pointer;
        }
        .eskul-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(60%);
            transition: .3s;
        }
        .eskul-card:hover img {
            filter: brightness(45%);
            transform: scale(1.05);
        }

        .eskul-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            width: 90%;
        }
        .eskul-nama {
            font-family: 'Pacifico', cursive;
            font-size: 1.6rem;
        }

        .eskul-btn {
            background: #66a7d4;
            color: #fff;
            padding: 4px 20px;
            border-radius: 12px;
            font-size: 0.8rem;
            text-decoration: none;
        }
        .eskul-btn:hover {
            background: #4a8bb7;
        }
    </style>
</head>

<body>
@include('layouts.navbar')

    <!-- ================= ESKUL SECTION ================= -->
    <div class="container py-5">
        <h2 class="eskul-title text-center mb-5">Pilih Ekstrakurikuler Favoritmu!</h2>

        <div class="row g-4">

            <!-- Card Template -->
            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/tari.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">Alsan</h3>
                        <p class="eskul-desc">Aktivitas kreatif dan bermanfaat.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/pramuka.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">Basket</h3>
                        <p class="eskul-desc">Ekskul olahraga yang seru.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/pmr.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">Odong</h3>
                        <p class="eskul-desc">Pembelajaran seni dan budaya.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

            <!-- Tambah card berikutnya sesuai kebutuhan -->
            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/drumband.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">Design & Printing</h3>
                        <p class="eskul-desc">Eksplorasi dunia desain.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/pmr.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">DrumBand</h3>
                        <p class="eskul-desc">Ekskul musik meriah.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="eskul-card">
                    <img src="{{ asset('images/pramuka.jpg') }}">
                    <div class="eskul-overlay">
                        <h3 class="eskul-nama">English Club</h3>
                        <p class="eskul-desc">Belajar English menyenangkan.</p>
                        <a href="#" class="eskul-btn">Lihat..</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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

</body>
</html>

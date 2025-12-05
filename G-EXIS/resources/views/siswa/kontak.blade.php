<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f4f9ff;
            font-family: "Poppins", sans-serif;
        }

        /* HERO */
        .contact-hero {
            background: linear-gradient(135deg, #5ea4ff, #7fc0ff);
            padding: 90px 0;
            color: white;
            text-align: center;
            border-bottom-left-radius: 70px;
            border-bottom-right-radius: 70px;
            box-shadow: 0 6px 25px rgba(0, 70, 200, .25);
            position: relative;
            overflow: hidden;
        }
        .contact-hero .bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.22);
            filter: blur(60px);
            animation: float 6s infinite ease-in-out;
        }
        .bubble.one { width: 300px; height: 300px; top: -60px; left: -40px; }
        .bubble.two { width: 250px; height: 250px; bottom: -70px; right: -30px; animation-delay: 1s; }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-18px); }
            100% { transform: translateY(0); }
        }

        /* CARD */
        .info-card {
            background: rgba(255,255,255,.55);
            backdrop-filter: blur(18px);
            border-radius: 22px;
            padding: 26px;
            border: 1px solid rgba(255,255,255,.55);
            transition: .35s;
            box-shadow: 0 4px 22px rgba(0,0,0,.07);
        }
        .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 34px rgba(0,0,0,.09);
        }

        .info-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            background: #ddeaff;
            color: #3d7ada;
            font-size: 28px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        /* FORM */
        .form-box {
            background: white;
            border-radius: 26px;
            padding: 38px;
            border: 1px solid #e4ecfa;
            box-shadow: 0 6px 25px rgba(0,0,0,.06);
        }
        .form-box input,
        .form-box textarea {
            background: #f2f6ff;
            border-radius: 14px !important;
            border: 1px solid #d6e4f7;
            transition: .2s;
        }
        .form-box input:focus,
        .form-box textarea:focus {
            border-color: #5ca4ee;
            box-shadow: 0 0 0 .16rem rgba(92,164,238,.25);
        }
        .form-box button {
            background: linear-gradient(to right, #5ea4ff, #7fc0ff);
            border: none;
            border-radius: 16px;
            color: white;
            font-weight: 600;
            transition: .25s;
        }
        .form-box button:hover {
            transform: translateY(-2px);
            opacity: .92;
        }

        /* SOCIAL */
        .social-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: #e9f1ff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            color: #3d7ada;
            transition: .25s;
        }
        .social-icon:hover {
            background: #3d7ada;
            color: white;
            transform: translateY(-6px);
        }

    </style>
</head>
<body>

@include('layouts.navbar')

<!-- HERO -->
<div class="contact-hero">
    <div class="bubble one"></div>
    <div class="bubble two"></div>
    <h1 class="fw-bold">Hubungi G-EXIS</h1>
    <p class="mt-2" style="opacity:.9; font-size:15px;">
        Ada pertanyaan seputar ekstrakurikuler? Kami siap membantu ✨
    </p>
</div>

<div class="container my-5">

    <!-- INFO -->
    <div class="row g-4 mb-4 text-center">
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                <h6 class="fw-bold mt-2">Telepon</h6>
                <p class="mb-0">(0261) 201531</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                <h6 class="fw-bold mt-2">Email</h6>
                <p class="mb-0">smkn2sumedang@yahoo.com</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-card">
                <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                <h6 class="fw-bold mt-2">Lokasi</h6>
                <p class="mb-0">Jl. Arif Rahman Hakim 59</p>
            </div>
        </div>
    </div>

    <div class="row g-4">

        <!-- FORM -->
        <div class="col-lg-6">
            <div class="form-box">
                <h4 class="fw-bold mb-3">Kirim Pesan</h4>
                <input type="text" class="form-control mb-3" placeholder="Nama Kamu">
                <input type="email" class="form-control mb-3" placeholder="Email Kamu">
                <textarea class="form-control mb-3" rows="4" placeholder="Pesan Kamu..."></textarea>
                <button class="btn w-100 py-2">Kirim <i class="bi bi-send-fill"></i></button>
            </div>
        </div>

        <!-- MAP -->
        <div class="col-lg-6">
            <div class="info-card p-0 overflow-hidden" style="height: 380px; border-radius:25px;">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.027876680471!2d107.92393267368609!3d-6.932680067791116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d10a7ca2ae03%3A0x777b9fc5f3867be1!2sSMK%20Negeri%202%20Sumedang!5e0!3m2!1sid!2sid!4v1700000000000"
                width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"></iframe>
            </div>

            <h5 class="fw-semibold mt-4">Ikuti Sosial Media</h5>
            <div class="d-flex gap-2 mt-2">
                <a class="social-icon"><i class="bi bi-instagram"></i></a>
                <a class="social-icon"><i class="bi bi-facebook"></i></a>
                <a class="social-icon"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

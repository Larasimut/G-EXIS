<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak G-EXIS</title>

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


<style>
/* Background Wave */
.contact-wrapper {
    background: linear-gradient(135deg, #d9ecff, #f2f8ff 60%);
    border-radius: 25px;
    padding: 45px;
    position: relative;
    overflow: hidden;
}

.contact-wrapper::before {
    content: "";
    position: absolute;
    top: -30px;
    left: -40px;
    width: 300px;
    height: 300px;
    background: rgba(70, 150, 210, 0.25);
    border-radius: 50%;
    filter: blur(40px);
}

.contact-wrapper::after {
    content: "";
    position: absolute;
    bottom: -40px;
    right: -40px;
    width: 260px;
    height: 260px;
    background: rgba(120, 180, 230, .25);
    border-radius: 50%;
    filter: blur(40px);
}

/* Contact Card */
.contact-info {
    background: #ffffffd9;
    backdrop-filter: blur(6px);
    padding: 25px 30px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.contact-info h5 {
    font-weight: 700;
    color: #0d5588;
}

.contact-info i {
    color: #0c7ad9;
    width: 28px;
}

/* Form Card */
.contact-form {
    background: linear-gradient(120deg, #0c7ad9, #4aa8ff);
    border-radius: 20px;
    padding: 30px;
    color: white;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.contact-form input,
.contact-form textarea {
    border-radius: 12px !important;
}

.social-icons i {
    font-size: 30px;
    cursor: pointer;
    transition: .3s;
}

.social-icons i:hover {
    transform: scale(1.2);
}
</style>

<!-- CONTACT SECTION -->
<style>
    .contact-hero {
        background: linear-gradient(135deg, #1d334a, #294a63);
        padding: 80px 0;
        color: white;
        text-align: center;
    }

    .contact-card {
        background: white;
        border-radius: 18px;
        padding: 28px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.07);
    }

    .contact-icon {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #e9f4ff;
        font-size: 26px;
        color: #1d70b8;
    }

    .form-box {
        background: #20384d;
        border-radius: 18px;
        padding: 30px;
        color: white;
    }

    .form-box input,
    .form-box textarea {
        background: rgba(255,255,255,0.15);
        border: none;
        color: white;
    }

    .form-box input::placeholder,
    .form-box textarea::placeholder {
        color: #d9e7f5;
    }

    .social-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        background: #e9f4ff;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 22px;
        margin-right: 10px;
        color: #1d70b8;
    }

    .social-icon:hover {
        background: #1d70b8;
        color: white;
        transform: translateY(-3px);
        transition: 0.3s;
    }
</style>

<!-- TOP BANNER -->
<div class="contact-hero">
    <h1 class="fw-bold">Contact Us</h1>
    <p class="mt-2">
        Ada pertanyaan seputar ekskul? Ingin bergabung? <br>
        Hubungi G-EXIS kapan saja!
    </p>
</div>

<div class="container my-5">
    <!-- CONTACT INFO -->
    <div class="row justify-content-center mb-4">
        <div class="col-lg-10">
            <div class="contact-card">
                <div class="row text-center">

                    <div class="col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                            <h5 class="mt-2 fw-bold">Telepon</h5>
                            <p class="mb-0">(0261) 201531</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                            <h5 class="mt-2 fw-bold">Email</h5>
                            <p class="mb-0">smkn2sumedang@yahoo.com</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="d-flex flex-column align-items-center">
                            <div class="contact-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <h5 class="mt-2 fw-bold">Lokasi</h5>
                            <p class="mb-0">Jl. Arif Rahman Hakim 59</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- FORM & MAP -->
    <div class="row g-4">

        <!-- FORM KIRI -->
        <div class="col-lg-6">
            <div class="form-box">
                <h4 class="fw-bold mb-3">Kirim Pesan</h4>

                <input type="text" placeholder="Nama Kamu" class="form-control mb-3">
                <input type="email" placeholder="Email Kamu" class="form-control mb-3">
                <textarea rows="4" placeholder="Pesan..." class="form-control mb-3"></textarea>

                <button class="btn btn-light w-100 fw-bold py-2">
                    Kirim Sekarang <i class="bi bi-send-fill"></i>
                </button>
            </div>
        </div>

        <!-- MAP KANAN -->
        <div class="col-lg-6">
            <div class="contact-card" style="padding: 0; overflow: hidden;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4066428266305!2d103.84665657477837!3d-5.3579182542923555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4088efd1b30f7d%3A0x8ab13f5ca9941aa!2sSMK%20Negeri%202%20Sumedang!5e0!3m2!1sen!2sid!4v1700000000000"
                    width="100%" height="360" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <div class="mt-3">
                <h5 class="fw-bold">Sosial Media</h5>
                <div class="d-flex mt-2">
                    <div class="social-icon"><i class="bi bi-instagram"></i></div>
                    <div class="social-icon"><i class="bi bi-facebook"></i></div>
                    <div class="social-icon"><i class="bi bi-youtube"></i></div>
                </div>
            </div>
        </div>

    </div>
</div>

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

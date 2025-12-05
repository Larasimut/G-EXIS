<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>G-EXIS Landing Page</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
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
            <img src="{{ asset('images/logoge.png') }}" alt="Logo" style="height:55px;">
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

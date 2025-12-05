<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Ekskul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f4f7fb;
      font-family: 'Poppins', sans-serif;
    }
    .eks-card {
      background: white;
      border-radius: 18px;
      padding: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: 0.2s;
    }
    .eks-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .eks-img {
      height: 150px;
      width: 100%;
      object-fit: cover;
      border-radius: 12px;
    }
    h2.title {
      font-weight: 700;
      margin-bottom: 25px;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="title text-center text-primary">Ekskul Terdaftar</h2>

  <div class="row g-4 mt-4">

    <!-- PMR -->
    <div class="col-md-4">
      <div class="eks-card">
        <img src="pmr.jpg" class="eks-img" alt="PMR">
        <h4 class="mt-3 fw-bold">PMR</h4>
        <p class="text-muted small">Ekskul Palang Merah Remaja yang berfokus pada pertolongan pertama, kesehatan, dan kedisiplinan.</p>
       <a href="{{ route('siswa.detailTerdaftar') }}" class="btn btn-primary w-100 mt-2">Lihat Detail</a>

      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

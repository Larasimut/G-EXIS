<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lihat Sertifikat</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #f3f8ff;
        font-family: "Poppins", sans-serif;
    }
    .certificate-box {
        background: white;
        border-radius: 18px;
        padding: 35px;
        box-shadow: 0 0 20px rgba(0,0,0,0.08);
        margin-top: 50px;
        text-align: center;
    }
    .certificate-preview {
        width: 100%;
        max-width: 500px;
        border-radius: 12px;
        border: 4px solid #2358a3;
        box-shadow: 0 0 12px rgba(0,0,0,0.15);
        transition: 0.3s;
    }
    .certificate-preview:hover {
        transform: scale(1.03);
    }
    .title {
        font-size: 28px;
        font-weight: 700;
        color: #2358a3;
        border-left: 6px solid #2358a3;
        padding-left: 12px;
    }
    .download-btn {
        background: #2358a3;
        color: white;
        padding: 12px 28px;
        border-radius: 10px;
        font-weight: 600;
        margin-top: 25px;
        transition: .3s;
    }
    .download-btn:hover {
        background: #173a6f;
        color: white;
        transform: scale(1.05);
    }
    .back-btn {
        text-decoration: none;
        font-weight: 600;
        color: #2358a3;
    }
    .back-btn:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>

<div class="container text-center">
    <a href="#" class="back-btn d-inline-block mt-4 mb-3">← Kembali</a>

    <div class="certificate-box mx-auto">
        <h2 class="title mb-4">Sertifikat Keaktifan Ekskul</h2>

        <!-- Sertifikat (Preview) -->
        <img src="img/certificate-sample.jpg" class="certificate-preview" alt="Sertifikat">

        <!-- Info singkat -->
        <p class="mt-4 text-secondary" style="max-width: 650px; margin: auto;">
            Berikut adalah sertifikat keaktifan sebagai anggota ekskul <strong>Paskibra</strong>.
            Sertifikat ini diberikan oleh pembina sebagai bentuk apresiasi atas keikutsertaan dan dedikasi.
        </p>

        <!-- Tombol download -->
        <a href="sertifikat.pdf" download class="btn download-btn">📥 Download Sertifikat</a>
    </div>
</div>

</body>
</html>

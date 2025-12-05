<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat Keaktifan – Paskibra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #4a90e2;
            --secondary-blue: #7cb9e8;
            --accent-blue: #a2d2ff;
            --light-blue: #e0f2fe;
            --soft-blue: #f8fbff;
            --glass-bg: rgba(255, 255, 255, 0.95);
            --glass-border: rgba(74, 144, 226, 0.1);
            --shadow-elegant: 0 10px 30px rgba(74, 144, 226, 0.15);
            --shadow-hover: 0 20px 50px rgba(74, 144, 226, 0.25);
            --success-green: #10b981;
            --warning-orange: #f59e0b;
            --danger-red: #ef4444;
            --purple: #8b5cf6;
            --orange: #f59e0b;
        }

        body {
            background: var(--soft-blue);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
            color: #1e293b;
            position: relative;
        }

        /* Subtle background pattern for uniqueness */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle at 20% 80%, rgba(74, 144, 226, 0.05) 0%, transparent 50%),
                              radial-gradient(circle at 80% 20%, rgba(162, 210, 255, 0.05) 0%, transparent 50%);
            z-index: -1;
        }

        .certificate-container {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            margin-top: 30px;
            text-align: center;
        }

        .certificate-title {
            font-weight: 800;
            font-size: 32px;
            color: var(--primary-blue);
            border-left: 6px solid var(--primary-blue);
            padding-left: 16px;
            margin-bottom: 30px;
            position: relative;
        }

        .certificate-logo {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: var(--shadow-elegant);
            transition: all 0.3s ease;
        }

        .certificate-logo:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-hover);
        }

        .certificate-logo i {
            font-size: 80px;
            color: white;
        }

        .certificate-info {
            max-width: 650px;
            margin: 20px auto;
            color: #6b7280;
            line-height: 1.6;
        }

        .download-btn {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
            margin-top: 25px;
        }

        .download-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .download-btn i {
            margin-right: 8px;
        }

        .no-certificate {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--glass-border);
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .no-certificate-icon {
            font-size: 64px;
            color: var(--warning-orange);
            margin-bottom: 20px;
        }

        .no-certificate-title {
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .no-certificate-text {
            color: #6b7280;
            line-height: 1.6;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .certificate-container {
                padding: 30px 20px;
            }
            .certificate-title {
                font-size: 28px;
            }
            .certificate-logo {
                width: 150px;
                height: 150px;
            }
            .certificate-logo i {
                font-size: 60px;
            }
        }
    </style>
</head>
<body>

<!-- Include layouts.sidebar untuk navbar, tombol back, dan sidebar -->
@include('layouts.sidebar')


<div class="container py-5">
    <div class="certificate-container mx-auto">
        <h2 class="certificate-title">Sertifikat Keaktifan Ekskul</h2>

        <!-- Kondisi: Jika sertifikat ada -->
        <div id="certificateAvailable">
            <!-- Logo Sertifikat -->
            <div class="certificate-logo">
                <i class="bi bi-award"></i>
            </div>

            <!-- Info singkat -->
            <p class="certificate-info">
                Berikut adalah sertifikat keaktifan sebagai anggota ekskul <strong>Paskibra</strong>.
                Sertifikat ini diberikan oleh pembina sebagai bentuk apresiasi atas keikutsertaan dan dedikasi.
            </p>

            <!-- Tombol download -->
            <a href="sertifikat.pdf" download class="btn download-btn">
                <i class="bi bi-download"></i> Download Sertifikat
            </a>
        </div>

        <!-- Kondisi: Jika sertifikat tidak ada -->
        <div id="certificateUnavailable" style="display: none;">
            <div class="no-certificate">
                <div class="no-certificate-icon">
                    <i class="bi bi-exclamation-triangle"></i>
                </div>
                <h3 class="no-certificate-title">Sertifikat Belum Tersedia</h3>
                <p class="no-certificate-text">
                    Sertifikat keaktifan ekskul Paskibra belum diberikan oleh pembina.
                    Silakan hubungi pembina atau tunggu pemberitahuan lebih lanjut.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
// Simulasi kondisi sertifikat (ubah true/false untuk testing)
const certificateExists = true; // Ganti ke false untuk menampilkan pesan tidak ada

if (certificateExists) {
    document.getElementById("certificateAvailable").style.display = "block";
    document.getElementById("certificateUnavailable").style.display = "none";
} else {
    document.getElementById("certificateAvailable").style.display = "none";
    document.getElementById("certificateUnavailable").style.display = "block";
}
</script>

</body>
</html>

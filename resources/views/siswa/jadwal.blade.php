<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Ekskul – Paskibra</title>
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

        .jadwal-container {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-elegant);
            border: 1px solid var(--glass-border);
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            margin-top: 30px;
        }

        .jadwal-title {
            font-weight: 800;
            font-size: 32px;
            color: var(--primary-blue);
            border-left: 6px solid var(--primary-blue);
            padding-left: 16px;
            margin-bottom: 30px;
            position: relative;
        }

        .jadwal-card {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
            animation: slideInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .jadwal-card:nth-child(1) { animation-delay: 0.1s; }
        .jadwal-card:nth-child(2) { animation-delay: 0.2s; }
        .jadwal-card:nth-child(3) { animation-delay: 0.3s; }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .jadwal-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        /* Variasi warna untuk card jadwal agar tidak monoton */
        .jadwal-card:nth-child(1) .jadwal-day {
            color: var(--primary-blue);
        }
        .jadwal-card:nth-child(1) .jadwal-location {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
        }

        .jadwal-card:nth-child(2) .jadwal-day {
            color: var(--purple);
        }
        .jadwal-card:nth-child(2) .jadwal-location {
            background: linear-gradient(135deg, var(--purple), #a78bfa);
        }

        .jadwal-card:nth-child(3) .jadwal-day {
            color: var(--orange);
        }
        .jadwal-card:nth-child(3) .jadwal-location {
            background: linear-gradient(135deg, var(--orange), #fbbf24);
        }

        .jadwal-day {
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .jadwal-time {
            color: #6b7280;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .jadwal-location {
            display: inline-block;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .jadwal-description {
            color: #374151;
            line-height: 1.5;
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
            .jadwal-container {
                padding: 30px 20px;
            }
            .jadwal-title {
                font-size: 28px;
            }
            .jadwal-card {
                padding: 16px;
            }
        }
    </style>
</head>
<body>

@include('layouts.sidebar')

<div class="container py-5">
    <div class="jadwal-container">
        <h2 class="jadwal-title">Jadwal Ekskul</h2>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="jadwal-card">
                    <div class="jadwal-day"><i class="bi bi-calendar-day"></i> Senin</div>
                    <div class="jadwal-time"><i class="bi bi-clock"></i> 15:30 – 17:30</div>
                    <div class="jadwal-location"><i class="bi bi-geo-alt"></i> Lapangan Utama</div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="jadwal-card">
                    <div class="jadwal-day"><i class="bi bi-calendar-day"></i> Rabu</div>
                    <div class="jadwal-time"><i class="bi bi-clock"></i> 15:30 – 17:30</div>
                    <div class="jadwal-location"><i class="bi bi-geo-alt"></i> Aula </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="jadwal-card">
                    <div class="jadwal-day"><i class="bi bi-calendar-day"></i> Jumat</div>
                    <div class="jadwal-time"><i class="bi bi-clock"></i> 14:00 – 17:00</div>
                    <div class="jadwal-location"><i class="bi bi-geo-alt"></i> Lapangan Utama</div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

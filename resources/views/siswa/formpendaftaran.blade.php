<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ekstrakulikuler – Paskibra</title>
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

        .registration-container {
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

        .registration-title {
            font-weight: 800;
            font-size: 32px;
            color: var(--primary-blue);
            border-left: 6px solid var(--primary-blue);
            padding-left: 16px;
            margin-bottom: 30px;
            position: relative;
            text-align: center;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
        }

        .form-control, .form-select {
            border-radius: 12px;
            border: 1px solid var(--glass-border);
            padding: 12px 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.3);
            width: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(74, 144, 226, 0.4);
        }

        .btn-submit i {
            margin-right: 8px;
        }

        .form-check-label {
            font-weight: 500;
            color: #6b7280;
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
            .registration-container {
                padding: 30px 20px;
            }
            .registration-title {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
@include('layouts.sidebar')


<div class="container py-5">
    <div class="registration-container mx-auto" style="max-width: 600px;">
        <h2 class="registration-title">Form Pendaftaran Ekstrakulikuler</h2>

       <form id="registrationForm" action="{{ route('siswa.daftar.store') }}" method="POST">
    @csrf


           <!-- Nama Lengkap -->
<div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
    <input
        type="text"
        class="form-control"
        id="nama"
        name="nama"
        value="{{ Auth::user()->name }}"
        readonly
    >
</div>

            <!-- Kelas -->
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas <span class="text-danger">*</span></label>
                <select class="form-select" id="kelas" name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <option value="10">Kelas 10</option>
                    <option value="11">Kelas 11</option>
                    <option value="12">Kelas 12</option>
                </select>
            </div>

            <!-- Ekstrakulikuler yang Dipilih -->
            <div class="mb-3">
                <label for="ekskul" class="form-label">Ekstrakulikuler yang Dipilih <span class="text-danger">*</span></label>
                <select class="form-select" id="ekskul" name="ekskul" required>
                    <option value="">Pilih Ekstrakulikuler</option>
                    <option value="paskibra">Paskibra</option>
                    <option value="pramuka">Pramuka</option>
                    <option value="basket">Basket</option>
                    <option value="voli">Voli</option>
                    <option value="futsal">Futsal</option>
                    <option value="paduan_suara">Paduan Suara</option>
                    <option value="teater">Teater</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Alasan Mendaftar -->
            <div class="mb-3">
                <label for="alasan" class="form-label">Alasan Mendaftar <span class="text-danger">*</span></label>
                <textarea class="form-control" id="alasan" name="alasan" rows="4" required placeholder="Jelaskan alasan Anda ingin bergabung dengan ekstrakulikuler ini"></textarea>
            </div>

            <!-- Kontak (Email atau No. HP) -->
            <div class="mb-3">
                <label for="kontak" class="form-label">Kontak (Email atau No. HP) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="kontak" name="kontak" required placeholder="Masukkan email atau nomor HP Anda">
            </div>

            <!-- Persetujuan -->
            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="persetujuan" name="persetujuan" required>
                    <label class="form-check-label" for="persetujuan">
                        Saya menyetujui syarat dan ketentuan pendaftaran ekstrakulikuler. <span class="text-danger">*</span>
                    </label>
                </div>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-submit">
                <i class="bi bi-send"></i> Daftar Sekarang
            </button>
        </form>
    </div>
</div>

<script>
// Validasi sederhana (opsional, bisa ditambah dengan JavaScript lebih lanjut)
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    // Lanjutkan submit jika valid
});
</script>

</body>
</html>

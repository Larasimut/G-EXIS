<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | G-EXIS</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/background-sekolah.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .form-box {
            background: rgba(0, 68, 123, 0.6);
            backdrop-filter: blur(12px);
            padding: 35px;
            border-radius: 20px;
            width: 380px;
            text-align: center;
            color: white;
            animation: fadeSlideIn 1s ease-out;
        }

        @keyframes fadeSlideIn {
            from { opacity:0; transform: translateY(50px); }
            to { opacity:1; transform:translateY(0); }
        }

        @keyframes floatLogo {
            0%,100% {transform:translateY(0);}
            50% {transform:translateY(-8px);}
        }

    
    </style>
</head>

<body>

    <div class="form-box">
       
        <h3 class="mb-3">Let’s Get Started</h3>

        <form action="{{ route('register.process') }}" method="POST">
            @csrf

            <div class="mb-3 text-start">
                <label class="form-label">Username</label>
                <input type="text" name="name" class="form-control rounded-pill" required>
            </div>

            <div class="mb-3 text-start">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control rounded-pill" required>
            </div>

            <div class="mb-3 text-start">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control rounded-pill" required>
            </div>

            <button class="mt-3 btn btn-primary w-100 rounded-pill fw-bold">
                Daftar
            </button>

        </form>

        <p class="mt-3">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="fw-bold text-light">Masuk</a>
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

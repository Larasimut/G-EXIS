<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | G-EXIS</title>
    <style>
        * { margin: 0; padding: 0; font-family: 'Poppins', sans-serif; box-sizing: border-box; }

        body {
            background: url('{{ asset('images/background-sekolah.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* --- ANIMASI MASUK UTAMA --- */
        @keyframes fadeSlideIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .form-box {
            background: rgba(0, 68, 123, 0.6);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 20px;
            width: 350px;
            text-align: center;
            color: #fff;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
            animation: fadeSlideIn 1s ease-out;
        }

        /* --- LOGO DENGAN ANIMASI --- */
        @keyframes floatLogo {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .form-box img {
            width: 130px;
            margin-bottom: 15px;
            animation: floatLogo 3s ease-in-out infinite;
        }

        h2 {
            font-size: 26px;
            margin-bottom: 10px;
            animation: fadeSlideIn 1.2s ease-out;
        }

        p {
            font-size: 13px;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeSlideIn 1.3s ease-out;
        }

        .input-box {
            width: 100%;
            margin-bottom: 15px;
            animation: fadeSlideIn 1.4s ease-out;
        }

        .input-box input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 30px;
            outline: none;
            font-weight: bold;
            color: #333;
            transition: 0.3s;
        }

        .input-box input::placeholder { color: #555; }

        .input-box input:focus {
            transform: scale(1.03);
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #00447b;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            animation: fadeSlideIn 1.5s ease-out;
        }

        button:hover {
            background: #0078d4;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
        }

        .small-text {
            margin-top: 15px;
            font-size: 14px;
            animation: fadeSlideIn 1.6s ease-out;
        }

        .small-text a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .small-text a:hover {
            color: #E3EEB2;
            text-shadow: 0 0 5px rgba(227, 238, 178, 0.8);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .form-box {
                width: 90%;
                padding: 30px;
            }
            .form-box img {
                width: 110px;
            }
        }
    </style>
</head>
<body>
    <div class="form-box">
        <img src="{{ asset('images/logo.png') }}" alt="Logo G-EXIS">
        <h2>Let’s Get Started</h2>
        <p>Daftar sekarang dan mulai perjalananmu jadi versi terbaik diri kamu.</p>
        <form>
            <div class="input-box">
                <input type="text" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password">
            </div>
            <button>Daftar</button>
            <div class="small-text">
                Sudah punya akun? <a href="{{ url('/login') }}">Masuk di sini</a>
            </div>
        </form>
    </div>
</body>
</html>

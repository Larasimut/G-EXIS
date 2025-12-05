<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            margin: 0;
            background: url('/images/bg-login.png') no-repeat center center;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .overlay {
            width: 100%;
            height: 100%;
            padding-left: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
        }

        .title-login {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .desc-login {
            font-size: 18px;
            margin-bottom: 40px;
            max-width: 500px;
            line-height: 1.4;
        }

        .login-box {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-top: 300px; 
        }

        .modern-input {
            width: 420px;
            padding: 18px 25px;
            border-radius: 35px;
            border: none;
            outline: none;
            background: rgba(255, 255, 255, 0.28);
            backdrop-filter: blur(8px);
            color: white;
            font-size: 16px;
        }

        .modern-input::placeholder {
            color: rgba(255, 255, 255, 0.85);
        }

        .btn-modern {
            width: 420px;
            padding: 15px;
            border-radius: 35px;
            border: none;
            background: #1A73E8;
            color: white;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
        }

        .register-link {
            margin-top: 8px;
            font-size: 15px;
            color: white;
        }

        .register-link a {
            color: #001BFF;
            text-decoration: none;
            font-weight: 600;
        }

        /* ===================== RESPONSIVE ===================== */
@media (max-width: 992px) {

    .overlay{
        padding-left: 40px;
    }

    .title-login{
        font-size: 32px;
    }

    .desc-login{
        font-size: 15px;
        max-width: 350px;
    }

    .login-box{
        margin-top: 200px;
    }

    .modern-input,
    .btn-modern{
        width: 300px;
    }
}

@media (max-width: 576px){

    body{
        background-position: center;
        background-size: cover;
    }

    .overlay{
        padding-left: 20px;
        padding-right: 20px;
        align-items: center;
        text-align: center;
    }

    .title-login{
        font-size: 26px;
    }

    .desc-login{
        font-size: 14px;
        max-width: 270px;
        margin-bottom: 25px;
    }

    .login-box{
        margin-top: 120px;
        width: 100%;
        align-items: center;
    }

    .modern-input,
    .btn-modern{
        width: 100%;
    }
}

    </style>
</head>

<body>

    <div class="overlay">

        <form method="POST" action="{{ route('login') }}" class="login-box">
            @csrf

            <input type="email" name="email" class="modern-input"
                placeholder="Masukan email" required>

            <input type="password" name="password" class="modern-input"
                placeholder="Masukan password" required>

            <button class="btn-modern">Masuk</button>

            <div class="register-link">
                Belum punya akun? <a href="{{ route('register') }}">Daftar Akun</a>
            </div>
        </form>

    </div>

</body>

</html>

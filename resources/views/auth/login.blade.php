<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | G-EXIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background: url('{{ asset('images/background-sekolah.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        /* Bagian kiri: overlay */
        .overlay {
            position: absolute;
            top: 0; left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,68,123,0.7), rgba(0,100,180,0.5));
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 60px;
            animation: slideInLeft 1s ease-out;
            backdrop-filter: blur(3px);
        }

        .overlay img {
            width: 150px; 
            margin-bottom: 35px;
            filter: drop-shadow(0 0 12px rgba(255,255,255,0.9));
            animation: fadeIn 2s ease-in-out;
        }

        .overlay h1 {
            font-size: 38px;
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-shadow: 0 0 12px rgba(255,255,255,0.5);
            animation: fadeUp 1.2s ease-in-out;
        }

        .overlay p {
            font-size: 15.5px;
            margin-bottom: 40px;
            line-height: 1.7;
            max-width: 400px;
            color: #f8f8f8;
            text-shadow: 0 0 8px rgba(255,255,255,0.3);
            animation: fadeUp 1.5s ease-in-out;
        }

        /* Form kanan */
        .form-container {
            position: relative;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: slideInRight 1.2s ease-out;
        }

        form {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(14px);
            border-radius: 25px;
            padding: 45px;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
            animation: fadeIn 1.3s ease-in-out;
        }

        input {
            width: 100%;
            padding: 13px 18px;
            margin: 10px 0;
            border-radius: 30px;
            border: none;
            outline: none;
            font-weight: 500;
            color: #333;
            transition: 0.3s;
        }

        input:focus {
            box-shadow: 0 0 10px rgba(0, 68, 123, 0.5);
        }

        input::placeholder {
            color: #666;
            font-weight: 600;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #00447b, #0078d4);
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            margin-top: 10px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: 0.4s;
            box-shadow: 0 0 8px rgba(0,120,212,0.5);
        }

        button:hover {
            background: linear-gradient(90deg, #005da3, #0090ff);
            box-shadow: 0 0 20px rgba(0,140,255,0.7);
            transform: translateY(-2px);
        }

        .small-text {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #fff;
            animation: fadeIn 2s ease-in-out;
        }

        .small-text a {
            color: #E3EEB2;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .small-text a:hover {
            text-decoration: underline;
            color: #fff;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            body { flex-direction: column; }
            .overlay {
                position: relative;
                width: 100%;
                height: 40%;
                padding: 30px;
                text-align: center;
                align-items: center;
            }
            .overlay img {
                width: 150px;
                margin-bottom: 20px;
            }
            .form-container {
                width: 100%;
                height: 60%;
            }
            form { width: 90%; }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <img src="{{ asset('images/logo.png') }}" alt="Logo G-EXIS">
        <h1>Hai, Sobat Ekskul!</h1>
        <p>Saatnya berkreasi, berprestasi, dan jadi inspirasi.<br>
        Login dulu yuk, biar gak ketinggalan kegiatan seru!</p>
    </div>

    <div class="form-container">
        <form>
            <input type="email" placeholder="Masukkan email">
            <input type="password" placeholder="Masukkan password">
            <button>Masuk</button>
            <div class="small-text">
                Belum punya akun? <a href="{{ url('/register') }}">Daftar Akun</a>
            </div>
        </form>
    </div>
</body>
</html>

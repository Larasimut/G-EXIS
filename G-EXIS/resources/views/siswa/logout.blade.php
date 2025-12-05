<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout — G-EXIS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #E3F1FF;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
        }

        .logout-box {
            background: white;
            width: 90%;
            max-width: 420px;
            padding: 35px;
            border-radius: 25px;
            text-align: center;
            box-shadow: 0 6px 18px rgba(0,0,0,0.15);
            animation: fade 0.25s ease-in-out;
        }

        @keyframes fade {
            from { opacity: 0; transform: scale(0.94); }
            to { opacity: 1; transform: scale(1); }
        }

        .logout-icon {
            font-size: 70px;
            color: #FF6F61;
            margin-bottom: 15px;
        }

        .btn-cancel {
            background: #4A76A8;
            color: white;
            font-weight: 600;
            border-radius: 14px;
            padding: 12px;
        }

        .btn-logout {
            background: linear-gradient(180deg, #FF928A, #FF6F61);
            color: white;
            font-weight: 600;
            border-radius: 14px;
            padding: 12px;
            box-shadow: 0 4px 12px rgba(255,100,90,0.4);
        }
    </style>
</head>
<body>

<div class="logout-box">
    <i class="fa fa-door-open logout-icon"></i>

    <h4 class="fw-bold mb-2">Logout</h4>
    <p class="text-muted mb-4" style="font-size: 15px;">
        Apakah kamu yakin ingin keluar dari akun G-EXIS?
        Semua progres akan tersimpan kok ✨
    </p>

    <div class="d-flex gap-2 justify-content-center mt-3">
        <a href="javascript:history.back()" class="btn btn-cancel px-4">
            <i class="fa fa-arrow-left me-1"></i> Batal
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-logout px-4">
                <i class="fa fa-check me-1"></i> Logout
            </button>
        </form>
    </div>
</div>

</body>
</html>

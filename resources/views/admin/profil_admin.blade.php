<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f9ff;
            font-family: 'Poppins', sans-serif;
        }
        .profile-card {
            background: #3b74c0;
            color: white;
            padding: 40px 30px;
            border-radius: 25px;
            text-align: center;
            max-width: 420px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 45px;
            font-weight: bold;
            color: #3b74c0;
            margin: auto;
            margin-bottom: 20px;
        }
        .btn-logout {
            background: #ff7b7b;
            border: none;
            padding: 12px 20px;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            width: 100%;
        }
    </style>
</head>

<body class="p-4">

    <div class="profile-card">
        
        <div class="profile-img">
            AD
        </div>

        <h3 class="fw-bold">Admin Sekolah</h3>
        <p class="mb-4">admin@sekolah.com</p>

        <hr style="border-color:rgba(255,255,255,0.3);">

        <p>Kelola ekskul, siswa, dan notifikasi melalui menu utama.</p>

        <div class="text-center mt-4 mb-4">
        <a href="{{ route('admin.dashboard') }}" 
           class="btn-logout"
           style="background-color:#0d3b66; border:none; border-radius:20px;">
            Kembali
        </a>
    </div>

</body>
</html>

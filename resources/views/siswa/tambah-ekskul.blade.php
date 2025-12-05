<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ekskul Favoritmu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(180deg, #4C6F8B, #3b5b75);
            font-family: 'Poppins', sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Title (tanpa animasi) */
        h1.title {
            font-size: 42px;
            font-family: 'Brush Script MT', cursive;
            text-align: center;
        }

        .search-box {
            background: rgba(255,255,255,0.9);
            border-radius: 50px;
            padding: 12px 28px;
            width: 480px;
            max-width: 92%;
            margin: auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
        }

        .search-box input {
            border: none;
            outline: none;
            width: 90%;
            background: transparent;
        }

        /* Card */
        .card-exkul {
            border-radius: 35px;
            overflow: hidden;
            position: relative;
        }

        .card-exkul img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .card-exkul:hover img {
            transform: scale(1.15);
        }

        /* Overlay */
        .card-overlay {
            background: rgba(0, 0, 0, 0.40);
            backdrop-filter: blur(4px);
            position: absolute;
            inset: 0;
            padding: 30px 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            transition: 0.3s;
        }
        .card-exkul:hover .card-overlay {
            background: rgba(0, 0, 0, 0.55);
        }

        .card-title {
            font-size: 33px;
            font-family: 'Brush Script MT', cursive;
        }

        .btn-lihat {
            background: rgba(255,255,255,0.3);
            border: 1px solid rgba(255,255,255,0.4);
            padding: 6px 35px;
            border-radius: 17px;
            margin-top: 15px;
            color: white;
            transition: 0.25s;
        }
        .btn-lihat:hover {
            background: rgba(255,255,255,0.45);
            transform: translateY(-3px);
        }

        /* Back button (tanpa animasi) */
        .btn-back{
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            display:flex;
            justify-content:center;
            align-items:center;
            color:#4C6F8B;
            font-size:30px;
            cursor:pointer;
            transition: 0.2s;
        }
        .btn-back:hover {
            transform: scale(1.08);
        }

        /* Menu button (tanpa animasi) */
        .btn-menu {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .btn-menu i {
            font-size: 40px;
            color: #4C6F8B;
        }
    </style>
</head>

<body>

    <div class="container-fluid mt-3">
        <div class="d-flex justify-content-between align-items-center px-3">
            <div class="btn-back">
                <i class="fa fa-arrow-left"></i>
            </div>

            <h1 class="title flex-grow-1">Tambah Ekskul Favoritmu!</h1>

            <div class="btn-menu">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="text-center mt-3">
        <div class="search-box d-flex align-items-center">
            <i class="fa fa-search fa-lg me-3 text-secondary"></i>
            <input type="text" placeholder="Cari ekskul ...">
        </div>
    </div>

    <!-- Grid Ekskul -->
    <div class="container mt-5 mb-5">
        <div class="row g-4">

            <!-- Card 1 -->
<div class="col-md-4">
    <div class="card-exkul shadow-lg">
        <img src="img/paskib.png">
        <div class="card-overlay">
            <div class="card-title">Paskibra</div>
            <div class="card-desc">Ekskul disiplin dan kepemimpinan SMKN 2 Sumedang.</div>
            <a href="{{ route('siswa.lihatekskul') }}" class="btn-lihat">Lihat..</a>

        </div>
    </div>
</div>

        </div>
    </div>

</body>
</html>

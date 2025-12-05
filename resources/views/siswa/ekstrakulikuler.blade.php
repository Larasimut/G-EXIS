<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #f6faff, #eaf1ff);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }

        /* TITLE */
        .eskul-title {
            font-weight: 700;
            font-size: 2.6rem;
            color: #1b3e6e;
            animation: fadeDown 1s ease;
        }
        .eskul-subtitle {
            font-size: 1rem;
            color: #6d8bb5;
            animation: fadeDown 1.3s ease;
        }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* FLOAT DECORATIONS */
        .float-shape {
            position: absolute;
            width: 160px;
            height: 160px;
            background: rgba(79, 129, 189, 0.12);
            border-radius: 50%;
            filter: blur(12px);
            animation: float 6s ease-in-out infinite;
        }
        .float1 { top: 70px; left: -50px; animation-delay: 0.2s; }
        .float2 { bottom: 120px; right: -40px; animation-delay: 1s; }
        .float3 { top: 40%; right: 35%; width: 90px; height: 90px; animation-delay: 2s; }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-22px); }
            100% { transform: translateY(0px); }
        }

        /* CARD STYLE */
        .eskul-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
            border: 1px solid #e3ecff;
            transition: .35s ease;
            position: relative;
        }

        .eskul-card:hover {
            transform: translateY(-10px);
            border-color: #c8d9ff;
            box-shadow: 0 14px 32px rgba(0, 0, 0, 0.12);
        }

        .eskul-img {
            height: 180px;
            object-fit: cover;
            width: 100%;
            transition: .4s ease;
        }
        .eskul-card:hover .eskul-img {
            transform: scale(1.06);
            filter: brightness(94%);
        }

        .eskul-name {
            font-size: 1.36rem;
            font-weight: 600;
            color: #1f3c5a;
        }

        .eskul-desc {
            font-size: .9rem;
            color: #6b7d90;
            min-height: 42px;
        }

        /* BUTTON CUSTOM */
        .btn-wrapper {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 10px;
        }

        .btn-lihat {
            background: #5aa9ff;
            color: #ffffff;
            padding: 7px 20px;
            border-radius: 10px;
            font-size: .85rem;
            text-decoration: none;
            transition: .25s;
        }
        .btn-lihat:hover {
            background: #3f8fde;
            transform: scale(1.06);
        }

        .btn-daftar {
            background: #ffd85a;
            color: #5a4300;
            padding: 7px 20px;
            border-radius: 10px;
            font-size: .85rem;
            text-decoration: none;
            transition: .25s;
        }
        .btn-daftar:hover {
            background: #f5c63c;
            transform: scale(1.06);
        }
    </style>
</head>

<body>

@include('layouts.navbar')

<!-- FLOAT SHAPES -->
<div class="float-shape float1"></div>
<div class="float-shape float2"></div>
<div class="float-shape float3"></div>

<!-- ================= ESKUL SECTION ================= -->
<div class="container py-5 position-relative">

    <div class="text-center mb-5">
        <h2 class="eskul-title">Ekstrakurikuler Sekolah</h2>
        <p class="eskul-subtitle">Pilih kegiatan terbaik untuk mengembangkan bakatmu ✨</p>
    </div>

    @php
        use Illuminate\Pagination\LengthAwarePaginator;

        $eskulList = [
            ['img'=>'aksara.jpg','nama'=>'Aksara','desc'=>'Belajar menulis dan literasi.'],
            ['img'=>'basket.jpg','nama'=>'Basket','desc'=>'Olahraga penuh strategi.'],
            ['img'=>'coding.jpg','nama'=>'Coding','desc'=>'Belajar pemrograman modern.'],
            ['img'=>'drumband.jpg','nama'=>'Drumband','desc'=>'Instrumen musik kompak.'],
            ['img'=>'english.jpg','nama'=>'English Club','desc'=>'Meningkatkan skill bahasa Inggris.'],
            ['img'=>'futsal.jpg','nama'=>'Futsal','desc'=>'Olahraga cepat dan teamwork.'],
            ['img'=>'irma.jpg','nama'=>'Irma','desc'=>'Ikatan Remaja Masjid.'],
            ['img'=>'karate.jpg','nama'=>'Karate','desc'=>'Bela diri dan disiplin.'],
            ['img'=>'karawitan.jpg','nama'=>'Karawitan','desc'=>'Seni musik tradisional Jawa.'],
            ['img'=>'kir.jpg','nama'=>'KIR','desc'=>'Karya Ilmiah Remaja.'],
            ['img'=>'publikasi.jpg','nama'=>'Media Publikasi','desc'=>'Jurnalistik & broadcasting.'],
            ['img'=>'paduansuara.jpg','nama'=>'Paduan Suara','desc'=>'Vokal & harmoni.'],
            ['img'=>'paskibra.jpg','nama'=>'Paskibra','desc'=>'Disiplin & upacara nasional.'],
            ['img'=>'pramuka.jpg','nama'=>'Pramuka','desc'=>'Kemandirian & survival.'],
            ['img'=>'silat.jpg','nama'=>'Pencak Silat','desc'=>'Seni bela diri Indonesia.'],
            ['img'=>'photography.jpg','nama'=>'Photography','desc'=>'Belajar foto dan editing.'],
            ['img'=>'pmr.jpg','nama'=>'PMR','desc'=>'Pertolongan pertama & kemanusiaan.'],
            ['img'=>'senitari.jpg','nama'=>'Seni Tari','desc'=>'Ekspresi seni dan budaya.'],
            ['img'=>'tataboga.jpg','nama'=>'Tata Boga','desc'=>'Kuliner dan memasak.'],
            ['img'=>'rias.jpg','nama'=>'Tata Rias','desc'=>'Make-up dan kecantikan.'],
            ['img'=>'voly.jpg','nama'=>'Voli','desc'=>'Olahraga kerja sama tim.'],
        ];

        $perPage = 6;
        $page = request()->get('page', 1);

        $collection = collect($eskulList);
        $paged = new LengthAwarePaginator(
            $collection->slice(($page - 1) * $perPage, $perPage)->values(),
            $collection->count(),
            $perPage,
            $page,
            ['path' => url()->current()]
        );
    @endphp

    <!-- CARD LIST -->
    <div class="row g-4">
        @foreach ($paged as $eskul)
        <div class="col-md-4">
            <div class="eskul-card">
                <img src="{{ asset('images/' . $eskul['img']) }}" class="eskul-img">
                <div class="p-3 text-center">
                    <h4 class="eskul-name">{{ $eskul['nama'] }}</h4>
                    <p class="eskul-desc">{{ $eskul['desc'] }}</p>

                    <!-- BUTTONS SEJAJAR DI TENGAH -->
                    <div class="btn-wrapper">
                        <a href="{{ route('siswa.lihatekskul') }}" class="btn-lihat">Lihat Selengkapnya</a>

                        <a href="{{ route('siswa.formpendaftaran') }}" class="btn-daftar">Daftar</a>


                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- PAGINATION -->
    <div class="mt-4 d-flex justify-content-center">
        {{ $paged->links('pagination::bootstrap-5') }}
    </div>
</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

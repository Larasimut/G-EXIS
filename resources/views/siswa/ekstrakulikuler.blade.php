<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #eff5ff, #dce8ff);
            font-family: "Poppins", sans-serif;
            overflow-x: hidden;
        }

        /* TITLE */
        .eskul-title {
            font-weight: 700;
            font-size: 2.7rem;
            color: #11386b;
            animation: fadeDown 1s ease;
        }
        .eskul-subtitle {
            font-size: 1.05rem;
            color: #6b7fa1;
            animation: fadeDown 1.35s ease;
        }
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-22px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* CARD DESIGN */
        .eskul-card {
            background: #ffffff;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid #d9e4ff;
            box-shadow: 0 10px 26px rgba(20, 60, 120, 0.08);
            transition: .35s ease;
        }
        .eskul-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 14px 42px rgba(20, 60, 120, 0.18);
        }
        .eskul-img {
            height: 190px;
            width: 100%;
            object-fit: cover;
            transition: .45s;
        }
        .eskul-card:hover .eskul-img {
            transform: scale(1.07);
            filter: brightness(92%);
        }

        .eskul-name {
            font-size: 1.45rem;
            font-weight: 600;
            color: #183557;
            margin-bottom: 6px;
        }
        .eskul-desc {
            font-size: .92rem;
            color: #5f6f82;
            line-height: 1.45rem;
            min-height: 70px;
        }

        /* BUTTON STYLE */
        .btn-wrapper {
            display: flex;
            justify-content: center;
            gap: 14px;
        }

        .btn-lihat {
            background: linear-gradient(135deg, #4e89ff, #2b6ad8);
            color: white;
            border-radius: 12px;
            padding: 8px 22px;
            font-size: .87rem;
            text-decoration: none;
            transition: .25s;
        }
        .btn-lihat:hover {
            transform: scale(1.09);
            box-shadow: 0 0 12px rgba(67, 126, 255, 0.65);
        }

        .btn-daftar {
            background: linear-gradient(135deg, #ffd454, #e7b100);
            color: #4a3600;
            border-radius: 12px;
            padding: 8px 22px;
            font-size: .87rem;
            text-decoration: none;
            transition: .25s;
        }
        .btn-daftar:hover {
            transform: scale(1.09);
            box-shadow: 0 0 12px rgba(255, 212, 76, 0.55);
        }
    </style>
</head>

<body>

@include('layouts.navbar')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="eskul-title">Ekstrakurikuler Sekolah</h2>
        <p class="eskul-subtitle">Tingkatkan potensi dan bakatmu melalui kegiatan yang bermakna dan menyenangkan ✨</p>
    </div>

    @php
        use Illuminate\Pagination\LengthAwarePaginator;

        $eskulList = [
            ['img'=>'akara.jpg','nama'=>'Aksara','desc'=>'Ekstrakurikuler yang mengasah kemampuan menulis, membaca, dan memahami literasi modern untuk meningkatkan kreativitas dan keterampilan berbahasa.'],
            ['img'=>'basket.jpg','nama'=>'Basket','desc'=>'Permainan olahraga yang mengandalkan kerja sama tim, ketangkasan, strategi, kekuatan fisik, dan sportivitas dalam setiap pertandingan.'],
            ['img'=>'coding.jpg','nama'=>'Coding','desc'=>'Belajar pemrograman dari dasar hingga tingkat lanjut untuk menciptakan aplikasi, website, game, dan teknologi modern.'],
            ['img'=>'drumband.jpg','nama'=>'Drumband','desc'=>'Ekskul musik ritmis dengan harmoni pukulan alat musik yang melatih kekompakan, disiplin, dan ekspresi.'],
            ['img'=>'english club.jpg','nama'=>'English Club','desc'=>'Tempat meningkatkan kemampuan speaking, writing, dan listening melalui kegiatan seru seperti debate, storytelling, dan games.'],
            ['img'=>'futsall.jpg','nama'=>'Futsal','desc'=>'Olahraga cepat dan intens yang melatih kelincahan, kekuatan, strategi, dan kerja sama antar pemain.'],
            ['img'=>'irmah.jpg','nama'=>'Irma','desc'=>'Ikatan Remaja Masjid dengan kegiatan positif seperti kajian, sosial keagamaan, serta perkembangan karakter islami.'],
            ['img'=>'karate.jpg','nama'=>'Karate','desc'=>'Seni bela diri yang mengajarkan kekuatan tubuh, kontrol emosi, kedisiplinan, dan ketepatan teknik.'],
            ['img'=>'karawitan.jpg','nama'=>'Karawitan','desc'=>'Kegiatan seni musik tradisional Jawa yang menggabungkan kultur, harmoni, dan suara gamelan yang khas.'],
            ['img'=>'kir.jpg','nama'=>'KIR','desc'=>'Karya Ilmiah Remaja yang fokus pada penelitian, penalaran ilmiah, percobaan, inovasi, dan kompetisi akademik.'],
            ['img'=>'media.jpg','nama'=>'Media Publikasi','desc'=>'Ekskul jurnalistik dan broadcasting yang fokus pada fotografi, penulisan berita, dokumentasi, dan editing.'],
            ['img'=>'padus.jpg','nama'=>'Paduan Suara','desc'=>'Kegiatan vokal serempak dengan harmoni suara bernuansa seni, teknik bernyanyi, dan kekompakan suara.'],
            ['img'=>'paskib.jpg','nama'=>'Paskibra','desc'=>'Ekskul kedisiplinan dan nasionalisme melalui latihan baris berbaris, upacara, dan kompetisi paskibraka.'],
            ['img'=>'pramuka.jpg','nama'=>'Pramuka','desc'=>'Membangun kemandirian, mental tangguh, survival skill, dan kerja sama melalui kegiatan outdoor.'],
            ['img'=>'silat.jpg','nama'=>'Pencak Silat','desc'=>'Seni bela diri tradisional Indonesia yang melatih fisik, teknik, mental, dan sportivitas.'],
            ['img'=>'photograhpy.jpg','nama'=>'Photography','desc'=>'Mengasah keahlian fotografi, pencahayaan, sudut pandang, dan editing untuk menghasilkan karya visual profesional.'],
            ['img'=>'pmr.jpg','nama'=>'PMR','desc'=>'Ekskul kemanusiaan yang mempelajari pertolongan pertama, kesehatan remaja, aksi sosial, dan kerelawanan.'],
            ['img'=>'tari.jpg','nama'=>'Seni Tari','desc'=>'Menampilkan ekspresi budaya melalui gerakan, koreografi, estetika panggung, dan seni pertunjukan.'],
            ['img'=>'tataboga.jpg','nama'=>'Tata Boga','desc'=>'Belajar memasak, plating, pengolahan bahan, dan pengembangan menu kuliner modern maupun tradisional.'],
            ['img'=>'tatarias.jpg','nama'=>'Tata Rias','desc'=>'Kegiatan make-up artist untuk panggung, harian, konten, hingga fashion show dengan teknik profesional.'],
            ['img'=>'voli.jpg','nama'=>'Voli','desc'=>'Olahraga teamwork yang penuh strategi, refleks cepat, kekuatan, dan koordinasi tim dalam pertandingan.'],
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

    <div class="row g-4">
        @foreach ($paged as $eskul)
        <div class="col-md-4">
            <div class="eskul-card">
                <img src="{{ asset('images/' . $eskul['img']) }}" class="eskul-img">
                <div class="p-3 text-center">
                    <h4 class="eskul-name">{{ $eskul['nama'] }}</h4>
                    <p class="eskul-desc">{{ $eskul['desc'] }}</p>

                    <div class="btn-wrapper">
                        <a href="{{ route('siswa.lihatekskul') }}?id={{ $loop->index + ($paged->currentPage()-1)*$perPage }}"
   class="btn-lihat">
   Lihat Selengkapnya
</a>

                        <a href="{{ route('siswa.formpendaftaran') }}" class="btn-daftar">Daftar</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4 d-flex justify-content-center">
        {{ $paged->links('pagination::bootstrap-5') }}
    </div>
</div>

@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

@include('layouts.navbar')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="eskul-title">Ekstrakulikuler Sekolah</h2>
        <p class="eskul-subtitle">Tingkatkan potensi dan bakatmu melalui kegiatan yang bermakna dan menyenangkan ✨</p>
    </div>
<div class="row justify-content-center mb-5">
    <div class="col-md-7 col-lg-6">
        <div class="search-wrapper">
            <i class="bi bi-search search-icon"></i>
            <input type="text" id="searchEkskul"
                class="search-input"
                placeholder="Cari ekstrakurikuler favoritmu...">
        </div>
    </div>
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
<div class="col-md-4 eskul-item">
    <div class="eskul-card">
        <img src="{{ asset('images/' . $eskul['img']) }}" class="eskul-img">
        <div class="p-3 text-center">
            <h4 class="eskul-name">{{ $eskul['nama'] }}</h4>
            <p class="eskul-desc">{{ $eskul['desc'] }}</p>

            <div class="btn-wrapper">
                <a href="{{ route('siswa.lihatekskul') }}?id={{ $loop->index + ($paged->currentPage()-1)*$perPage }}"
                   class="btn-lihat">Lihat Selengkapnya</a>

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
<script>
document.getElementById("searchEkskul").addEventListener("keyup", function () {
    let keyword = this.value.toLowerCase();
    let items = document.querySelectorAll(".eskul-item");

    items.forEach(function (item) {
        let nama = item.querySelector(".eskul-name").innerText.toLowerCase();
        item.style.display = nama.includes(keyword) ? "" : "none";
    });
});
</script>

@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

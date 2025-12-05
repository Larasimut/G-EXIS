@extends('layouts.admin')

@section('content')

<style>
    /* CARD STYLE */
    .stat-card {
        background: #0C4A6E;
        color: white;
        padding: 25px;
        border-radius: 25px;
        width: 100%;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .stat-card h4 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .stat-card p {
        font-size: 15px;
        margin: 0;
        opacity: 0.8;
    }

    .stat-card h2 {
        font-size: 30px;
        margin: 12px 0;
        font-weight: 700;
    }

    .stat-card a {
        color: #CDE4FF;
        font-size: 14px;
        text-decoration: underline;
    }

    /* CHART BOX */
    .chart-box {
        background: white;
        padding: 25px;
        border-radius: 25px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
</style>

<div class="container-fluid">

    <!-- TITLE -->
    <h1 class="fw-bold" style="color:#0C4A6E; font-size:38px;">Welcome Devi!</h1>
    <p style="margin-top:-8px; font-size:15px;">
        Hari baru, semangat baru 😊 <br>
        Yuk, pastikan semua data tetap rapi dan sistem berjalan dengan baik!
    </p>

    <!-- STAT CARDS -->
    <div class="row mt-4 gy-4">

        <!-- DATA EKSKUL -->
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Data Ekskul</h4>
                <p>Status</p>
                <h2>{{ $data['ekskul_count'] }} Ekskul Terdaftar</h2>
                <a href="{{ route('admin.monitoring') }}">Lihat selengkapnya</a>
            </div>
        </div>

        <!-- DATA SISWA -->
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Data Siswa</h4>
                <p>Status</p>
                <h2>{{ $data['siswa_count'] }} Siswa Terdaftar</h2>
                <a href="{{ route('admin.data.siswa') }}">Lihat selengkapnya</a>
            </div>
        </div>

        <!-- DATA PEMBINA -->
        <div class="col-md-4">
            <div class="stat-card">
                <h4>Data Pembina</h4>
                <p>Status</p>
                <h2>{{ $data['pembina_count'] }} Pembina Terdaftar</h2>
                <a href="{{ route('admin.data.pembina') }}">Lihat selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- CHART SECTION -->
    <div class="row mt-5">

        <!-- PIE CHART -->
        <div class="col-md-6 mb-4">
            <div class="chart-box">
                <canvas id="kelasChart"></canvas>
            </div>
        </div>

        <!-- BAR CHART -->
        <div class="col-md-6 mb-4">
            <div class="chart-box">
                <canvas id="ekskulChart"></canvas>
            </div>
        </div>
    </div>

</div>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // PIE Chart - Distribusi Kelas
    new Chart(document.getElementById('kelasChart'), {
        type: 'pie',
        data: {
            labels: ['Kelas X', 'Kelas XI', 'Kelas XII'],
            datasets: [{
                backgroundColor: ["#0C4A6E", "#4F90C0", "#A7D3F2"],
                data: @json($data['kelas_distribution'])
            }]
        }
    });

    // BAR Chart - Ekskul
    new Chart(document.getElementById('ekskulChart'), {
        type: 'bar',
        data: {
            labels: @json($data['ekskul_names']),
            datasets: [{
                backgroundColor: "#0C4A6E",
                data: @json($data['ekskul_values'])
            }]
        },
        options: {
            scales: { 
                y: { beginAtZero: true } 
            }
        }
    });
</script>

@endsection

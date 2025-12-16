@extends('layouts.admin')

@section('content')

<style>
    :root {
        --primary: #0C4A6E;
        --secondary: #64748B;
        --bg-soft: #F8FAFC;
    }

    body {
        background-color: var(--bg-soft);
    }

    /* PAGE TITLE */
    .page-title {
        font-size: 32px;
        font-weight: 700;
        color: var(--primary);
    }

    .page-subtitle {
        color: var(--secondary);
        font-size: 14px;
    }

    /* STAT CARD (TIDAK DIUBAH) */
    .stat-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 24px;
        height: 100%;
        box-shadow: 0 6px 20px rgba(0,0,0,0.06);
        transition: all .2s ease;
        border-left: 5px solid var(--primary);
    }

    .stat-card:hover {
        transform: translateY(-3px);
    }

    .stat-card h6 {
        font-size: 14px;
        font-weight: 600;
        color: var(--secondary);
        margin-bottom: 8px;
    }

    .stat-card h2 {
        font-size: 30px;
        font-weight: 700;
        color: var(--primary);
        margin: 0;
    }

    .stat-card a {
        display: inline-block;
        margin-top: 12px;
        font-size: 13px;
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
    }

    .stat-card a:hover {
        text-decoration: underline;
    }

    /* CHART CARD (DIKECILKAN) */
    .chart-box {
        background: #ffffff;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.06);
        height: 320px; /* 🔥 ukuran diperkecil */
        display: flex;
        flex-direction: column;
    }

    .chart-title {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 12px;
        color: var(--primary);
    }

    .chart-box canvas {
        max-height: 240px !important; /* 🔥 chart lebih kecil */
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="mb-4">
        <h1 class="page-title">Dashboard Admin</h1>
        <p class="page-subtitle">
            Selamat datang kembali 👋
            <br>Kelola data ekskul dengan rapi dan efisien.
        </p>
    </div>

    <!-- STATISTICS -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="stat-card">
                <h6>Data Ekskul</h6>
                <h2>{{ $data['ekskul_count'] }}</h2>
                <span class="text-muted small">Ekskul Terdaftar</span>
                <br>
                <a href="{{ route('admin.monitoring') }}">Lihat detail →</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h6>Data Siswa</h6>
                <h2>{{ $data['siswa_count'] }}</h2>
                <span class="text-muted small">Siswa Terdaftar</span>
                <br>
                <a href="{{ route('admin.riwayat.pendaftaran') }}">Lihat detail →</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h6>Data Pembina</h6>
                <h2>{{ $data['pembina_count'] }}</h2>
                <span class="text-muted small">Pembina Terdaftar</span>
                <br>
                <a href="{{ route('admin.users.index') }}">Lihat detail →</a>

            </div>
        </div>

    </div>

    <!-- CHARTS -->
    <div class="row mt-5 g-4">

        <div class="col-md-6">
            <div class="chart-box">
                <div class="chart-title">Distribusi Siswa per Kelas</div>
                <canvas id="kelasChart"></canvas>
            </div>
        </div>

        <div class="col-md-6">
            <div class="chart-box">
                <div class="chart-title">Jumlah Pendaftar Ekskul</div>
                <canvas id="ekskulChart"></canvas>
            </div>
        </div>

    </div>

</div>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // PIE CHART
    new Chart(document.getElementById('kelasChart'), {
        type: 'pie',
        data: {
            labels: ['Kelas X', 'Kelas XI', 'Kelas XII'],
            datasets: [{
                backgroundColor: ['#0C4A6E', '#4F90C0', '#A7D3F2'],
                data: @json($data['kelas_distribution'])
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false // 🔥 wajib
        }
    });

    // BAR CHART
    new Chart(document.getElementById('ekskulChart'), {
        type: 'bar',
        data: {
            labels: @json($data['ekskul_names']),
            datasets: [{
                backgroundColor: '#0C4A6E',
                data: @json($data['ekskul_values'])
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // 🔥 wajib
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>

@endsection

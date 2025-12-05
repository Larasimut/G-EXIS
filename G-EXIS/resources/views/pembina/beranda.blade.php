@extends('pembina.layout', ['title' => 'Beranda'])

@section('content')
<div class="px-3 container-fluid">

    {{-- JUDUL --}}
    <div class="mb-4">
        <h2 class="fw-bold text-primary">Welcome Pembina!</h2>
        <p class="text-muted">
            Selamat Datang, {{ auth()->user()->nama ?? 'Pembina' }} <br>
            Berikut ringkasan kegiatan ekskulmu hari ini!
        </p>
    </div>

    {{-- ROW CARD --}}
    <div class="mb-4 row g-3">

        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm card bg-info rounded-3">
                <h6>Jumlah Anggota Aktif</h6>
                <h3 class="fw-bold">250</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm card bg-success rounded-3">
                <h6>Total Kegiatan Terselesaikan</h6>
                <h3 class="fw-bold">32</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 text-white shadow-sm card bg-warning rounded-3">
                <h6>Kegiatan Belum/Tertunda</h6>
                <h3 class="fw-bold">4</h3>
            </div>
        </div>

    </div>

    {{-- ROW PIE CHART --}}
    <div class="mb-4 row g-3">

        <div class="col-md-8">
            <div class="p-3 shadow-sm card rounded-3">
                <h6 class="mb-3 fw-bold">Status Kegiatan Ekskul</h6>

                {{-- Tinggi chart dirapikan --}}
                <div style="height: 260px;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

    </div>

    {{-- ROW LINE CHART --}}
    <div class="mb-4 row g-3">

        <div class="col-md-8">
            <div class="p-3 shadow-sm card rounded-3">
                <h6 class="fw-bold">Grafik Kegiatan Bulanan</h6>

                {{-- Tinggi chart dirapikan --}}
                <div style="height: 280px;">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

    </div>

</div>

{{-- CHART JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // PIE CHART
    new Chart(document.getElementById("pieChart"), {
        type: "pie",
        data: {
            labels: ["Selesai", "Berjalan"],
            datasets: [{
                data: [45, 20],
                backgroundColor: ["#1e90ff", "#7cc6fe"]
            }]
        },
        options: {
            maintainAspectRatio: false
        }
    });

    // LINE CHART
    new Chart(document.getElementById("lineChart"), {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei"],
            datasets: [{
                label: "Jumlah Kegiatan",
                data: [15, 25, 22, 35, 40],
                borderWidth: 3,
                borderColor: "#1e90ff",
                tension: 0.3
            }]
        },
        options: {
            maintainAspectRatio: false
        }
    });
</script>

@endsection

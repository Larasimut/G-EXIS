@extends('pembina.layout', ['title' => 'Beranda'])

@section('content')
<div class="px-3 container-fluid">

    {{-- JUDUL --}}
    <div class="mb-4">
        <h2 class="fw-bold text-primary">Welcome Pembina!</h2>
        <p class="text-muted">
            Selamat Datang, {{ auth()->user()->name }} <br>
            Berikut ringkasan ekskulmu hari ini.
        </p>
    </div>

    {{-- ROW CARD --}}
    <div class="mb-4 row g-3">

        <div class="col-md-4">
            <div class="p-3 text-white shadow-sm card bg-info rounded-3">
                <h6>Total Anggota Ekstrakulikuler</h6>
                <h3 class="fw-bold">{{ $totalAnggota }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 text-white shadow-sm card bg-success rounded-3">
                <h6>Total Pendaftar Ekstrakulikuler</h6>
                <h3 class="fw-bold">{{ $totalPendaftar }}</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-3 text-white shadow-sm card bg-warning rounded-3">
                <h6>Jumlah Anggota Yang Harus Diterima</h6>
                <h3 class="fw-bold">{{ $totalPending }}</h3>
            </div>
        </div>

    </div>

    {{-- PIE CHART --}}
    <div class="mb-4 row g-3">
        <div class="col-md-6">
            <div class="p-3 shadow-sm card rounded-3">
                <h6 class="fw-bold mb-3">Status Pendaftar Ekskul</h6>
                <div style="height: 280px;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        {{-- LINE CHART --}}
        <div class="col-md-6">
            <div class="p-3 shadow-sm card rounded-3">
                <h6 class="fw-bold mb-3">Jumlah Pendaftar Per Bulan</h6>
                <div style="height: 280px;">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // PIE CHART
    new Chart(document.getElementById("pieChart"), {
        type: "pie",
        data: {
            labels: ["Diterima", "Pending", "Ditolak"],
            datasets: [{
                data: [{{ $totalAnggota }}, {{ $totalPending }}, {{ $totalDitolak }}],
                backgroundColor: ["#28a745", "#ffc107", "#dc3545"]
            }]
        }
    });

    // LINE CHART
    new Chart(document.getElementById("lineChart"), {
        type: "line",
        data: {
            labels: {!! json_encode($chartLabels) !!},
            datasets: [{
                label: "Jumlah Pendaftar",
                data: {!! json_encode($chartValues) !!},
                borderWidth: 3,
                borderColor: "#1e90ff",
                tension: 0.3,
                fill: false
            }]
        }
    });
</script>

@endsection

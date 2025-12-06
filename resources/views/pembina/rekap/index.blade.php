@extends('pembina.layout', ['title' => 'Rekap Absen'])

@section('content')
<h4 class="mb-3 fw-bold">Rekap Absensi Ekskul {{ $ekskul->nama }}</h4>

<div class="border-0 shadow-sm card rounded-4">
    <div class="card-body">

        <!-- FILTER BULAN -->
        <form method="GET" class="gap-2 mb-3 d-flex align-items-center">
            <input type="month" name="bulan" value="{{ $bulan }}" class="w-auto form-control">
            <button class="px-3 btn btn-success">Filter</button>

            <a href="{{ route('pembina.rekap.download', ['bulan' => $bulan]) }}"
                class="px-3 btn btn-warning text-dark">
                Download Excel
            </a>
        </form>

        <table class="table table-bordered table-hover">
            <thead class="text-white" style="background:#5F8B4C;">
                <tr>
                    <th>Nama Siswa</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($rekap as $r)
                <tr>
                    <td>{{ $r['nama'] }}</td>
                    <td class="fw-bold text-success">{{ $r['hadir'] }}</td>
                    <td class="fw-bold text-danger">{{ $r['tidak_hadir'] }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">Tidak ada data bulan ini</td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection

@extends('pembina.layout', ['title' => 'Rekap Absensi Siswa'])

@section('content')
<h4 class="mb-3 fw-bold">Rekap Absensi Siswa</h4>

<div class="border-0 shadow-sm card rounded-4">
    <div class="card-body">

        {{-- FILTER BULAN --}}
        <form method="GET" class="mb-3 d-flex align-items-center gap-2">
            <label class="fw-bold">Pilih Bulan:</label>
            <input type="month" name="bulan" class="form-control w-auto" value="{{ request('bulan') }}">
            <button class="btn btn-primary">Filter</button>
        </form>

        {{-- BUTTON DOWNLOAD --}}
        <form action="{{ route('pembina.rekap.download') }}" method="GET" class="mb-3">
            <input type="hidden" name="bulan" value="{{ request('bulan') }}">
            <button type="submit" class="btn btn-success">
                Download Excel
            </button>
        </form>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Ekstrakulikuler</th>
                    <th>Kehadiran</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($rekap as $index => $r)
            <tr>
                {{-- Nomor --}}
                <td>{{ $index + 1 }}</td>

                {{-- Nama Siswa --}}
                <td>{{ $r->user->name ?? '-' }}</td>

                {{-- Ekstrakulikuler --}}
                <td>{{ $r->ekskul->nama ?? $r->ekskul_id ?? '-' }}</td>

                {{-- Kehadiran --}}
                <td class="fw-bold
                    @if($r->status == 'hadir') text-success
                    @elseif($r->status == 'izin') text-warning
                    @elseif($r->status == 'sakit') text-info
                    @else text-danger @endif">
                    {{ ucfirst($r->status) ?? '-' }}
                </td>

                {{-- Keterangan --}}
                <td>{{ $r->keterangan ?? '-' }}</td>

                {{-- Foto --}}
                <td>
                    @if($r->foto)
                        <img src="{{ asset('absensi/'.$r->foto) }}"
                             alt="Foto Absen" class="img-thumbnail" width="80">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                </td>

                {{-- Tanggal --}}
                <td>{{ \Carbon\Carbon::parse($r->tanggal)->format('d-m-Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">
                    Tidak ada data bulan ini
                </td>
            </tr>
            @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection

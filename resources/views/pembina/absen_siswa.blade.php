@extends('pembina.layout', ['title' => 'Rekap Absensi Siswa'])

@section('content')

<h4 class="mb-3 fw-bold text-primary">Rekap Absensi Siswa</h4>

<div class="border-0 shadow-sm card rounded-4">
    <div class="card-body">

        {{-- FILTER BULAN --}}
        <form method="GET" class="mb-3 d-flex align-items-center gap-2">
            <label class="fw-bold">Pilih Bulan:</label>
            <input type="month" name="bulan" class="form-control w-auto" value="{{ $bulan ?? '' }}">
            <button class="btn btn-primary" type="submit">Filter</button>

        </form>
        <a href="{{ route('pembina.absen_siswa.download', ['bulan' => $bulan]) }}"
   class="btn btn-success mb-3">
    Download Excel
</a>



        <table class="table table-hover mt-3">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Ekskul</th>
                    <th>Kehadiran</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($absensi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->ekskul }}</td>

                    {{-- WARNA STATUS --}}
                    <td class="fw-bold
                        @if($item->kehadiran == 'hadir') text-success
                        @elseif($item->kehadiran == 'izin') text-warning
                        @else text-danger
                        @endif">
                        {{ ucfirst($item->kehadiran) }}
                    </td>

                    <td>{{ $item->keterangan ?? '-' }}</td>

                    <td>
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                 width="80"
                                 class="rounded shadow-sm border">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>

                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-3">
                        — Belum ada absensi yang masuk —
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection

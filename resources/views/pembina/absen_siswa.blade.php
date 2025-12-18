@extends('pembina.layout', ['title' => 'Rekap Absensi Siswa'])

@section('content')

<style>
    /* SEARCH */
    .search-wrapper {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 10px;
    }

    .search-box {
        position: relative;
        width: 260px;
    }

    .search-box i {
        position: absolute;
        top: 50%;
        left: 12px;
        transform: translateY(-50%);
        color: #0d6efd;
        font-size: 14px;
    }

    .search-box input {
        padding-left: 36px;
        border-radius: 20px;
        font-size: 13px;
        height: 38px;
    }
</style>

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

        <!-- SEARCH -->
        <div class="search-wrapper">
            <div class="search-box">
                <i class="bi bi-search"></i>
                <input type="text"
                       id="searchAbsensi"
                       class="form-control"
                       placeholder="Cari nama siswa...">
            </div>
        </div>

        <table class="table table-hover align-middle mt-3 searchable-table">
            <thead class="table-primary text-center">
                <tr>
                    <th style="width: 50px">No</th>
                    <th>Nama Siswa</th>
                    <th>Ekskul</th>
                    <th>Kehadiran</th>
                    <th>Keterangan</th>
                    <th style="width: 120px">Foto</th>
                    <th style="width: 180px">Tanggal & Waktu</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($absensi as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td class="text-capitalize">{{ $item->ekskul }}</td>

                    <td class="fw-bold text-center
                        @if($item->kehadiran == 'hadir') text-success
                        @elseif($item->kehadiran == 'izin') text-warning
                        @else text-danger
                        @endif">
                        {{ ucfirst($item->kehadiran) }}
                    </td>

                    <td>{{ $item->keterangan ?? '-' }}</td>

                    <td class="text-center">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                 width="70"
                                 height="70"
                                 class="rounded-3 shadow-sm border object-fit-cover">
                        @else
                            <span class="text-muted small">Tidak ada</span>
                        @endif
                    </td>

                    <td class="text-nowrap text-center small">
                        {{ $item->created_at->format('d-m-Y') }} <br>
                        <span class="text-muted">
                            {{ $item->created_at->format('H:i:s') }}
                        </span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-4">
                        — Belum ada absensi yang masuk —
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

{{-- SCRIPT SEARCH --}}
<script>
document.getElementById('searchAbsensi').addEventListener('keyup', function () {
    let keyword = this.value.toLowerCase();

    document.querySelectorAll('.searchable-table tbody tr').forEach(function (row) {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(keyword) ? '' : 'none';
    });
});
</script>

@endsection

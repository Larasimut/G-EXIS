@extends('pembina.layout')

@section('content')

<style>
    :root {
        --primary-blue: #11386B;
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        background: #ffffff;
    }

    .table thead th {
        background: #e8eef7;
        color: var(--primary-blue);
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody tr:hover {
        background: #f4f7fc;
    }

    .nav-tabs .nav-link {
        font-weight: 600;
        color: var(--primary-blue);
    }

    .nav-tabs .nav-link.active {
        background: var(--primary-blue);
        color: white !important;
        border-radius: 8px 8px 0 0;
    }

    .badge-ekskul {
        background: var(--primary-blue);
        color: white;
    }

    .status-pending {
        background: #ffeeba;
        color: #b88600;
    }

    .status-disetujui {
        background: #c3f3d7;
        color: #117c31;
    }

    .status-ditolak {
        background: #ffd6d6;
        color: #a30000;
    }
</style>

<div class="container mt-4">

    <h3 class="mb-4 fw-bold" style="color: var(--primary-blue);">
        Konfirmasi Permintaan Keluar Ekskul
    </h3>

    {{-- NAV TABS --}}
    <ul class="nav nav-tabs mb-3 fw-semibold">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pending">
                Pending
                <span class="badge bg-warning text-dark ms-1">
                    {{ $pendingKeluar->count() }}
                </span>
            </button>
        </li>

        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#disetujui">
                Disetujui
                <span class="badge bg-success ms-1">
                    {{ $disetujuiKeluar->count() }}
                </span>
            </button>
        </li>

        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ditolak">
                Ditolak
                <span class="badge bg-danger ms-1">
                    {{ $ditolakKeluar->count() }}
                </span>
            </button>
        </li>
    </ul>

    <div class="tab-content">

        {{-- ================= PENDING ================= --}}
        <div class="tab-pane fade show active" id="pending">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan Keluar</th>
                            <th style="width:140px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pendingKeluar as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>
                                <span class="badge badge-ekskul">
                                    {{ $d->ekskul }}
                                </span>
                            </td>
                            <td>{{ $d->alasan_keluar ?? '-' }}</td>

                            <td>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm rounded-pill px-3">
                                        ✓ Setujui
                                    </button>
                                </form>

                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm rounded-pill px-3 mt-1">
                                        ✗ Tolak
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Tidak ada permintaan keluar
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

        {{-- ================= DISETUJUI ================= --}}
        <div class="tab-pane fade" id="disetujui">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan Keluar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($disetujuiKeluar as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>
                                <span class="badge badge-ekskul">
                                    {{ $d->ekskul }}
                                </span>
                            </td>
                            <td>{{ $d->alasan_keluar ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Belum ada yang disetujui
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

        {{-- ================= DITOLAK ================= --}}
        <div class="tab-pane fade" id="ditolak">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan Keluar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($ditolakKeluar as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>
                                <span class="badge badge-ekskul">
                                    {{ $d->ekskul }}
                                </span>
                            </td>
                            <td>{{ $d->alasan_keluar ?? '-' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Tidak ada yang ditolak
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>

@endsection

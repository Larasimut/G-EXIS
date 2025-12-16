@extends('pembina.layout')

@section('content')

<style>
    :root {
        --primary-blue: #11386B; /* biru tua elegan */
    }

    .card-custom {
        border: none;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        background: #ffffff;
    }

    /* HEADER TABEL */
    .table thead th {
        background: #e8eef7;
        color: var(--primary-blue);
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    /* HOVER */
    .table tbody tr:hover {
        background: #f4f7fc;
    }

    /* NAV TAB */
    .nav-tabs .nav-link {
        font-weight: 600;
        color: var(--primary-blue);
    }

    .nav-tabs .nav-link.active {
        background: var(--primary-blue);
        color: white !important;
        border-radius: 8px 8px 0 0;
    }

    /* BADGE STATUS */
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .badge-ekskul {
        background: var(--primary-blue);
        color: white;
    }

    .status-pending {
        background: #ffeeba;
        color: #b88600;
    }

    .status-diterima {
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
        Daftar Pendaftar Ekstrakurikuler
    </h3>

    {{-- NAV TABS --}}
    <ul class="nav nav-tabs mb-3 fw-semibold">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#pending">
                Pending
                <span class="badge bg-warning text-dark ms-1">{{ $pending->count() }}</span>
            </button>
        </li>

        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#diterima">
                Diterima
                <span class="badge bg-success ms-1">{{ $diterima->count() }}</span>
            </button>
        </li>

        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ditolak">
                Ditolak
                <span class="badge bg-danger ms-1">{{ $ditolak->count() }}</span>
            </button>
        </li>
    </ul>

    <div class="tab-content">

        {{-- PENDING --}}
        <div class="tab-pane fade show active" id="pending">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan</th>
                            <th>Kontak</th>
                            <th style="width:130px;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($pending as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td><span class="badge badge-ekskul">{{ $d->ekskul }}</span></td>
                            <td>{{ $d->alasan }}</td>
                            <td>{{ $d->kontak }}</td>

                            <td>
                                <form action="{{ route('pembina.terima', $d->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-success btn-sm rounded-pill px-3">✓ Terima</button>
                                </form>

                                <form action="{{ route('pembina.tolak', $d->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger btn-sm rounded-pill px-3 mt-1">✗ Tolak</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="6" class="text-center text-muted">Belum ada data pending</td></tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

        {{-- DITERIMA --}}
        <div class="tab-pane fade" id="diterima">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($diterima as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td><span class="badge badge-ekskul">{{ $d->ekskul }}</span></td>
                            <td>{{ $d->alasan }}</td>
                            <td>{{ $d->kontak }}</td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center text-muted">Tidak ada pendaftar diterima</td></tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

        {{-- DITOLAK --}}
        <div class="tab-pane fade" id="ditolak">
            <div class="card-custom mb-4">

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Ekskul</th>
                            <th>Alasan</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($ditolak as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td><span class="badge badge-ekskul">{{ $d->ekskul }}</span></td>
                            <td>{{ $d->alasan }}</td>
                            <td>{{ $d->kontak }}</td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="text-center text-muted">Tidak ada pendaftar ditolak</td></tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>

@endsection

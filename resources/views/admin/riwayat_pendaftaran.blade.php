@extends('layouts.admin')

@section('content')

<style>
    .page-title {
        font-weight: 600;
        margin-bottom: 18px;
    }

    .card-clean {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 12px 32px rgba(0,0,0,.07);
    }

    .table {
        table-layout: fixed;
    }

    .table thead th {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #64748b;
        padding: 14px 12px;
        border-bottom: 1px solid #e5e7eb;
        text-align: center;
    }

    .table tbody td {
        padding: 14px 12px;
        border-top: 1px solid #e5e7eb;
        vertical-align: middle;
        text-align: center;
    }

    .table thead th:first-child,
    .table tbody td:first-child {
        width: 6%;
        color: #94a3b8;
        font-weight: 500;
    }

    .table thead th:nth-child(2),
    .table tbody td:nth-child(2) {
        text-align: left;
        padding-left: 20px;
        width: 39%;
    }

    .table tbody tr {
        transition: background .15s ease;
    }

    .table tbody tr:hover {
        background-color: #f8fafc;
    }

    .student-name {
        font-weight: 500;
        color: #0f172a;
    }

    .badge-ekskul {
        background: #eef2ff;
        color: #3730a3;
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 500;
        display: inline-block;
        min-width: 120px;
    }

    .join-date {
        color: #64748b;
        font-size: 14px;
        white-space: nowrap;
    }

    .empty-state {
        padding: 48px 0;
        color: #94a3b8;
        font-style: italic;
        text-align: center;
    }

    .pagination {
        justify-content: center;
    }
</style>

<h4 class="page-title">Riwayat Pendaftaran Ekskul</h4>

<div class="card card-clean border-0">
    <div class="card-body p-0">

        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Ekskul</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($riwayat as $item)
                    <tr>
                        <td>
                            {{ $loop->iteration + ($riwayat->currentPage() - 1) * $riwayat->perPage() }}
                        </td>

                        <td>
                            <span class="student-name">
                                {{ $item->nama_siswa }}
                            </span>
                        </td>

                        <td>
                            <span class="badge-ekskul">
                                {{ $item->nama_ekskul }}
                            </span>
                        </td>

                        <td>
                            <span class="join-date">
                                {{ \Carbon\Carbon::parse($item->tanggal_gabung)->format('d M Y') }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="empty-state">
                            Belum ada data pendaftaran
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="px-4 py-3">
            {{ $riwayat->links() }}
        </div>

    </div>
</div>

@endsection

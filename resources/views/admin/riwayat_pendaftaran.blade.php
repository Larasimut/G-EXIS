@extends('layouts.admin')

@section('content')

<style>
    .page-title {
        font-weight: 600;
        margin-bottom: 20px;
        color: #0f172a;
    }

    .card-clean {
        background: #ffffff;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(0,0,0,.06);
        overflow: hidden;
    }

    .table {
        margin-bottom: 0;
        table-layout: fixed;
    }

    .table thead {
        background: #f8fafc;
    }

    .table thead th {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: #64748b;
        padding: 14px 16px;
        border-bottom: 1px solid #e5e7eb;
        text-align: center;
        white-space: nowrap;
    }

    .table tbody td {
        padding: 16px;
        border-top: 1px solid #e5e7eb;
        vertical-align: middle;
        text-align: center;
    }

    .table tbody tr:hover {
        background-color: #f9fafb;
    }

    .col-no {
        width: 70px;
        color: #94a3b8;
        font-weight: 500;
    }

    .col-name {
        text-align: left !important;
        width: 35%;
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
        min-width: 120px;
        display: inline-block;
    }

    .join-date {
        color: #64748b;
        font-size: 14px;
        white-space: nowrap;
    }

    .empty-state {
        padding: 60px 0;
        text-align: center;
        color: #94a3b8;
        font-style: italic;
    }
</style>

<h4 class="page-title">Riwayat Pendaftaran Ekskul</h4>

<div class="card card-clean border-0">
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th class="col-no">No</th>
                    <th class="col-name">Nama Siswa</th>
                    <th>Ekskul</th>
                    <th>Tanggal Bergabung</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($riwayat as $index => $item)
                    <tr>
                        <td class="col-no">{{ $index + 1 }}</td>
                        <td class="col-name">
                            <span class="student-name">{{ $item->nama_siswa }}</span>
                        </td>
                        <td>
                            <span class="badge-ekskul">{{ $item->nama_ekskul }}</span>
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
                            Belum ada data pendaftaran ekskul
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

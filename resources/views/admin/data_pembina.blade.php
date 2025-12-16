@extends('layouts.admin')

@section('title', 'Data Pembina')

@section('content')

<style>
    :root {
        --primary: #164C7B;
        --primary-dark: #0C2C52;
        --soft-bg: #F8FAFC;
    }

    /* PAGE */
    .page-title {
        font-size: 28px;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 8px;
    }

    .page-subtitle {
        color: #64748B;
        font-size: 14px;
    }

    /* CARD */
    .card-custom {
        background: #fff;
        border-radius: 20px;
        padding: 24px;
        box-shadow: 0 8px 24px rgba(0,0,0,.06);
    }

    /* BUTTON */
    .btn-add {
        background: var(--primary-dark);
        color: white;
        padding: 10px 26px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        transition: .2s;
    }

    .btn-add:hover {
        background: var(--primary);
        color: white;
    }

    /* TABLE */
    .table thead th {
        font-size: 14px;
        font-weight: 600;
        color: var(--primary);
        border-bottom: 2px solid #E2E8F0;
        padding: 14px;
    }

    .table tbody td {
        padding: 16px 14px;
        font-size: 14px;
        color: #334155;
        border-bottom: 1px solid #F1F5F9;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background: #F8FAFC;
    }

    /* CODE MASK */
    .code-mask {
        letter-spacing: 2px;
        font-weight: 600;
    }

    .eye-btn {
        cursor: pointer;
        color: var(--primary);
        margin-left: 10px;
    }

    /* ACTION ICON */
    .action-icon {
        font-size: 18px;
        margin: 0 6px;
        color: var(--primary);
        transition: .2s;
    }

    .action-icon:hover {
        transform: scale(1.15);
    }

    .delete-icon {
        color: #DC2626;
    }
</style>

<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="page-title">Kelola User</h1>
            <p class="page-subtitle">Kelola akun Pembina dan Siswa</p>
        </div>

        <a href="{{ route('admin.users.create') }}" class="btn-add">
    <i class="bi bi-plus-circle me-1"></i> Tambah User
</a>

    </div>

    <!-- TABLE CARD -->
    <div class="card-custom">

        <table class="table align-middle mb-0">

            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $item)

                <tr>

                    <td>{{ $item->name }}
</td>

                    <td>{{ $item->email }}</td>

                    <td>
                        <span class="code-mask">••••••</span>
                        <i class="bi bi-eye eye-btn"></i>
                    </td>

                    <td class="text-center">

                        <a href="{{ route('admin.users.edit', $item->id) }}"
                           class="action-icon"
                           title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.users.destroy', $item->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Hapus User ini?')">
                            @csrf
                            @method('DELETE')

                            <button class="action-icon delete-icon border-0 bg-transparent"
                                    title="Hapus">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection

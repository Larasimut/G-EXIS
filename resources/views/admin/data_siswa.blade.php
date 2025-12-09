@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<style>
    /* TABEL SIMPLE */
    table {
        width: 90%;
        border-collapse: collapse;
        margin-top: 30px;
    }

    th {
        background: #164C7B;
        color: white;
        padding: 12px;
        text-align: center;
        font-weight: 600;
        border: 1px solid #ddd;
    }

    td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    /* TOMBOL */
    .btn-add {
        background: #0C2C52;
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
    }

    .btn-edit, .btn-delete {
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 14px;
        text-decoration: none;
    }

    .btn-edit {
        background: #2980B9;
        color: white;
    }

    .btn-delete {
        background: #C0392B;
        color: white;
        border: none;
    }
</style>

<div class="container py-4">

    <h2 class="text-center fw-bold" style="color:#164C7B; font-size:28px;">
        Data Siswa Ekstrakulikuler Gridas
    </h2>

    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('admin.siswa.create') }}" class="btn-add">
            + Tambah User
        </a>
    </div>

    <div class="d-flex justify-content-center">

        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($siswa as $item)
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>******</td>

                    <td>

                        <!-- Edit -->
                        <a href="{{ route('admin.siswa.edit', $item->id) }}" 
                           class="btn-edit me-2">
                           Edit
                        </a>

                        <!-- Delete -->
                        <form action="{{ route('admin.siswa.destroy', $item->id) }}" 
                              method="POST" 
                              style="display:inline;"
                              onsubmit="return confirm('Hapus user ini?')">

                            @csrf
                            @method('DELETE')

                            <button class="btn-delete">
                                Hapus
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

@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<style>
    .table-bubble td, .table-bubble th {
        padding: 14px 22px !important;
        border: none !important;
    }

    .bubble-box {
        background: white;
        border: 2px solid #164C7B;
        border-radius: 25px;
        text-align: center;
        font-weight: 600;
        color: #164C7B;
    }

    .header-bubble {
        background: #164C7B;
        color: white;
        font-size: 20px;
        font-weight: bold;
        border-radius: 25px;
        padding: 12px;
        text-align: center;
    }

    .btn-add {
        background: #0C2C52;
        color: white;
        padding: 10px 28px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 16px;
    }
</style>

<div class="container py-4">

    <!-- Judul -->
    <h2 class="text-center fw-bold" style="color:#164C7B; font-size:32px;">
        Data Siswa Ekstrakulikuler Gridas
    </h2>

    <!-- Tombol tambah -->
    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('admin.siswa.create') }}" class="btn-add">
            + Tambah User
        </a>
    </div>

    <!-- TABEL -->
    <div class="mt-5 d-flex justify-content-center">
        <table class="table-bubble" style="width:85%;">

            <thead>
                <tr>
                    <th class="header-bubble">Username</th>
                    <th class="header-bubble">Email</th>
                    <th class="header-bubble">Password</th>
                    <th class="header-bubble">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($siswa as $item)
                <tr>

                    <!-- Username -->
                    <td>
                        <div class="bubble-box">{{ $item->username }}</div>
                    </td>

                    <!-- Email -->
                    <td>
                        <div class="bubble-box">{{ $item->email }}</div>
                    </td>

                    <!-- Password -->
                    <td>
                        <div class="bubble-box d-flex justify-content-between px-3">
                            ****** 
                            <span style="cursor:pointer; color:#164C7B;">👁️</span>
                        </div>
                    </td>

                    <!-- Aksi -->
                    <td class="text-center">

                        <!-- Edit -->
                        <a href="{{ route('admin.siswa.edit', $item->id) }}" class="icon-btn me-3">
                            ✏️
                        </a>

                        <!-- Delete -->
                        <form action="{{ route('admin.siswa.destroy', $item->id) }}"
                              method="POST" 
                              style="display:inline;"
                              onsubmit="return confirm('Hapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="icon-btn" style="color:#C0392B;">🗑️</button>
                        </form>

                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>
    </div>

</div>

@endsection

@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

<style>
    .form-card {
        background: #ffffff;
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
    }

    .page-title {
        font-weight: 600;
        margin-bottom: 4px;
    }

    .page-subtitle {
        color: #6c757d;
        margin-bottom: 24px;
    }

    .form-control {
        border-radius: 10px;
        padding: 10px 14px;
    }

    .btn-save {
        background: linear-gradient(135deg, #0C4A6E, #0369A1);
        color: #fff;
        border: none;
        padding: 10px 22px;
        border-radius: 10px;
        font-weight: 500;
        transition: all .25s ease;
    }

    .btn-save:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 18px rgba(3,105,161,.35);
    }

    .btn-back {
        background: #f1f5f9;
        color: #334155;
        border: none;
        padding: 10px 22px;
        border-radius: 10px;
        margin-right: 8px;
    }
</style>

<div class="container mt-4">

    <div class="form-card">

        <h3 class="page-title">Edit User</h3>
        <p class="page-subtitle">Perbarui data akun</p>

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $user->name) }}"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       value="{{ old('email', $user->email) }}"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-control" required>
                    <option value="pembina" {{ $user->role == 'pembina' ? 'selected' : '' }}>
                        Pembina
                    </option>
                    <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>
                        Siswa
                    </option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Password (opsional)</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Kosongkan jika tidak diganti">
            </div>

            <div class="d-flex">
                <a href="{{ route('admin.users.index') }}" class="btn-back">
                    Kembali
                </a>

                <button type="submit" class="btn-save">
                    Update User
                </button>
            </div>

        </form>

    </div>

</div>

@endsection

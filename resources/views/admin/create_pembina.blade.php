@extends('layouts.admin')

@section('title', 'Tambah Pembina')

@section('content')

<style>
    :root {
        --primary: #164C7B;
        --soft-bg: #F8FAFC;
    }

    .form-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 28px;
        box-shadow: 0 8px 24px rgba(0,0,0,.06);
        max-width: 600px;
        margin: auto;
    }

    .page-title {
        font-size: 26px;
        font-weight: 700;
        color: var(--primary);
        text-align: center;
        margin-bottom: 6px;
    }

    .page-subtitle {
        font-size: 14px;
        color: #64748B;
        text-align: center;
        margin-bottom: 24px;
    }

    .form-label {
        font-weight: 600;
        color: #334155;
        font-size: 14px;
    }

    .form-control {
        border-radius: 14px;
        padding: 12px 14px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 .15rem rgba(22,76,123,.2);
    }

    .btn-save {
        background: var(--primary);
        color: white;
        padding: 12px;
        border-radius: 16px;
        font-weight: 600;
        font-size: 15px;
        width: 100%;
        transition: .2s;
        border: none;
    }

    .btn-save:hover {
        background: #0C2C52;
    }

    .btn-back {
        display: block;
        text-align: center;
        margin-top: 14px;
        font-size: 14px;
        color: var(--primary);
        text-decoration: none;
        font-weight: 600;
    }

    .btn-back:hover {
        text-decoration: underline;
    }
</style>

<div class="container mt-4">

    <div class="form-card">

        <h3 class="page-title">Tambah User</h3>
<p class="page-subtitle">Buat akun login baru</p>

<form action="{{ route('admin.users.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-control" required>
            <option value="">-- Pilih Role --</option>
            <option value="pembina">Pembina</option>
            <option value="siswa">Siswa</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn-save">
        Simpan User
    </button>
</form>
</div>


@endsection

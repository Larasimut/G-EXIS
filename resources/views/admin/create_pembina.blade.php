@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    <h3 class="fw-bold mb-4">Tambah Pembina</h3>

    <form action="{{ route('admin.pembina.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kode Pembina</label>
            <input type="text" name="kode" class="form-control" required>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>

</div>

@endsection

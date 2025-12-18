@extends('layouts.admin')

@section('title', 'Kelola Notifikasi')

@section('content')

<style>
:root {
    --primary: #0E3A5D;
    --accent: #2563EB;
    --muted: #64748B;
    --border: #E5E7EB;
    --bg: #F8FAFC;
    --soft: #F1F5F9;
}

.page-title {
    font-size: 26px;
    font-weight: 700;
    color: var(--primary);
}

.page-subtitle {
    font-size: 14px;
    color: var(--muted);
    max-width: 720px;
    line-height: 1.6;
}

/* CARD */
.notif-card {
    position: relative;
    background: #fff;
    border-radius: 18px;
    padding: 22px 24px;
    border: 1px solid var(--border);
    margin-bottom: 18px;
    transition: .25s ease;
}

.notif-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, var(--accent), #60A5FA);
}

.notif-card:hover {
    box-shadow: 0 14px 34px rgba(0,0,0,.08);
    transform: translateY(-2px);
}

.notif-header {
    display: flex;
    align-items: center;
}

.sender {
    display: flex;
    align-items: center;
    gap: 12px;
}

.sender-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: var(--soft);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    font-size: 20px;
}

.sender-name {
    font-weight: 600;
    font-size: 15px;
    color: #0F172A;
}

.notif-body {
    margin-left: 54px;
    margin-top: 10px;
    font-size: 14.5px;
    line-height: 1.75;
    color: #334155;
}

.notif-footer {
    margin-left: 54px;
    margin-top: 14px;
    display: flex;
    justify-content: flex-end;
}

/* BUTTON */
.btn-delete {
    border: none;
    background: #FEE2E2;
    color: #B91C1C;
    padding: 7px 16px;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 600;
    transition: .2s;
}

.btn-delete:hover {
    opacity: .85;
}
</style>

<div class="container mt-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h2 class="page-title">Kelola Notifikasi</h2>
        <p class="page-subtitle">
            Notifikasi yang dikirim pembina untuk disampaikan kepada siswa.
            Admin berperan sebagai pengelola akhir sebelum informasi diterima siswa.
        </p>
    </div>

    <!-- LIST -->
    @foreach($notifs as $notif)
    <div class="notif-card">

        <div class="notif-header">
            <div class="sender">

                <div class="sender">
    <div class="sender-icon">
        <i class="bi bi-person-badge-fill"></i>
    </div>
    <div>
        <div class="sender-name">
            Pembina {{ ucfirst($notif->ekskul) }}
        </div>
        <small class="text-muted">
            {{ $notif->pengirim_nama }}
        </small>
    </div>
</div>

            </div>
        </div>

        <div class="notif-body">
            {{ $notif->pesan }}
        </div>

        <div class="notif-footer">
    <a href="{{ route('admin.kelola.notifikasi.edit', $notif->id) }}"
       class="btn btn-sm me-2"
       style="background:#E0F2FE;color:#0369A1;border-radius:12px;font-weight:600">
        Edit
    </a>

    <form action="{{ route('admin.kelola.notifikasi.destroy', $notif->id) }}"
          method="POST"
          onsubmit="return confirm('Hapus notifikasi ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete">
            Hapus
        </button>
    </form>
</div>

    </div>
    @endforeach

</div>
@endsection

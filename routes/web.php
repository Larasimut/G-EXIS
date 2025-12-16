<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pembina\SertifikatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminNotifikasi;
use App\Http\Controllers\Admin\PembinaController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Pembina\NotifikasiController;
use App\Http\Controllers\Pembina\ProfilController;
use App\Http\Controllers\Pembina\RekapController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AbsensiSiswaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Pembina\KonfirmasiPendaftaranController;
use App\Http\Controllers\Pembina\DashboardPembinaController;
use App\Http\Controllers\Pembina\RekapAbsensiPembinaController;




/*
|--------------------------------------------------------------------------
| Redirect default to admin dashboard
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['role:siswa'])
    ->prefix('siswa')
    ->name('siswa.')
    ->group(function () {

    Route::get('/ekskul-terdaftar', [HomeController::class, 'ekskulTerdaftar'])
        ->name('ekskulTerdaftar');

    Route::get('/ekskul-terdaftar/{id}', [HomeController::class, 'detailTerdaftar'])
        ->name('detailTerdaftar');

    Route::post('/absensi', [AbsensiSiswaController::class, 'store'])->name('absensi.store');
// Form absen berdasarkan pendaftar
Route::get('/absen/{id}', [HomeController::class, 'absen'])->name('absen');

// Simpan absensi
Route::post('/absen/store', [AbsensiSiswaController::class, 'store'])->name('absen.store');

    Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
    Route::get('/ekstrakulikuler', [HomeController::class, 'ekstrakulikuler'])->name('ekstrakulikuler');
    Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
    Route::get('/tambah-ekskul', [HomeController::class, 'tambahEkskul'])->name('tambahEkskul');
    Route::get('/notifikasi', [HomeController::class, 'notifikasi'])->name('notifikasi');
    Route::get('/lihatekskul', [HomeController::class, 'lihatEkskul'])->name('lihatekskul');
    Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('jadwal');
    Route::get('/sertifikat', [HomeController::class, 'sertifikat'])->name('sertifikat');
    Route::get('/formpendaftaran', [HomeController::class, 'formpendaftaran'])->name('formpendaftaran');

    Route::post('/daftar-ekskul',[PendaftaranController::class,'store'])->name('daftar.store');

    Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

    Route::delete('/ekskul/{id}/batal', [HomeController::class, 'batalEkskul'])->name('batalEkskul');

    Route::post('/tambah-ekskul', [HomeController::class, 'tambahEkskulPost'])
        ->name('tambahEkskulPost')
        ->middleware('auth');
});


/*
|--------------------------------------------------------------------------
| LOGOUT ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/logout/confirm', function () {
    return view('siswa.logout');
})->name('logout.confirm');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // ================= DASHBOARD =================
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    Route::view('/profil', 'admin.profil_admin')
        ->name('profil.admin');

Route::get('/riwayat-pendaftaran', [DashboardController::class, 'riwayatPendaftaran'])
    ->name('riwayat.pendaftaran');

    // ================= NOTIFIKASI =================
    Route::get('/kelola-notifikasi', [AdminNotifikasi::class, 'index'])
        ->name('kelola.notifikasi');

    Route::get('/kelola-notifikasi/{id}/edit', [AdminNotifikasi::class, 'edit'])
        ->name('kelola.notifikasi.edit');

    Route::put('/kelola-notifikasi/{id}', [AdminNotifikasi::class, 'update'])
        ->name('kelola.notifikasi.update');

    Route::delete('/kelola-notifikasi/{id}', [AdminNotifikasi::class, 'destroy'])
        ->name('kelola.notifikasi.destroy');


    // ================= USERS (ADMIN KELOLA USER) =================
    // LIST SEMUA USER (PEMBINA + SISWA)
    Route::get('/users', [UserController::class, 'index'])
        ->name('users.index');

    // FORM TAMBAH USER
    Route::get('/users/create', [UserController::class, 'create'])
        ->name('users.create');

    // SIMPAN USER
    Route::post('/users', [UserController::class, 'store'])
        ->name('users.store');

    // FORM EDIT USER
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])
        ->name('users.edit');

    // UPDATE USER
    Route::put('/users/{id}', [UserController::class, 'update'])
        ->name('users.update');

    // HAPUS USER
    Route::delete('/users/{id}', [UserController::class, 'destroy'])
        ->name('users.destroy');


    // ================= DATA SISWA (KHUSUS DETAIL SISWA) =================
    Route::get('/data-siswa', [SiswaController::class, 'index'])
        ->name('data.siswa');

    Route::get('/data-siswa/create', [SiswaController::class, 'create'])
        ->name('siswa.create');

    Route::post('/data-siswa', [SiswaController::class, 'store'])
        ->name('siswa.store');

    Route::get('/data-siswa/{id}/edit', [SiswaController::class, 'edit'])
        ->name('siswa.edit');

    Route::put('/data-siswa/{id}', [SiswaController::class, 'update'])
        ->name('siswa.update');

    Route::delete('/data-siswa/{id}', [SiswaController::class, 'destroy'])
        ->name('siswa.destroy');


    // ================= MONITORING EKSKUL =================
    Route::view('/monitoring', 'admin.monitoring')
        ->name('monitoring');

    Route::view('/monitoring/ekskul-pembina', 'admin.monitoring_ekskul_pembina')
        ->name('monitoring.ekskul.pembina');

    Route::view('/monitoring/ekskul', 'admin.monitoring_ekskul')
        ->name('monitoring.ekskul');

    Route::view('/monitoring/pendaftaran', 'admin.monitoring_pendaftaran')
        ->name('monitoring.pendaftaran');

    Route::view('/monitoring/reward', 'admin.monitoring_reward')
        ->name('monitoring.reward');


    // ================= REKAP ABSENSI =================
    Route::view('/rekap-absen', 'admin.rekap_absen')
        ->name('rekap.absen');

    Route::get('/rekap-paskib', [AbsensiController::class, 'rekapPaskib'])->name('rekap.paskib');
    Route::get('/rekap-ec', [AbsensiController::class, 'rekapEC'])->name('rekap.ec');
    Route::get('/rekap-coding', [AbsensiController::class, 'rekapCoding'])->name('rekap.coding');
    Route::get('/rekap-voly', [AbsensiController::class, 'rekapVoly'])->name('rekap.voly');
    Route::get('/rekap-aksara', [AbsensiController::class, 'rekapAksara'])->name('rekap.aksara');
    Route::get('/rekap-basket', [AbsensiController::class, 'rekapBasket'])->name('rekap.basket');
    Route::get('/rekap-design', [AbsensiController::class, 'rekapDesign'])->name('rekap.design');
    Route::get('/rekap-drumband', [AbsensiController::class, 'rekapDrumband'])->name('rekap.drumband');
    Route::get('/rekap-fotografi', [AbsensiController::class, 'rekapFotografi'])->name('rekap.fotografi');
    Route::get('/rekap-futsal', [AbsensiController::class, 'rekapFutsal'])->name('rekap.futsal');
    Route::get('/rekap-irma', [AbsensiController::class, 'rekapIrma'])->name('rekap.irma');
    Route::get('/rekap-karate', [AbsensiController::class, 'rekapKarate'])->name('rekap.karate');
    Route::get('/rekap-karawitan', [AbsensiController::class, 'rekapKarawitan'])->name('rekap.karawitan');
    Route::get('/rekap-kir', [AbsensiController::class, 'rekapKir'])->name('rekap.kir');
    Route::get('/rekap-padus', [AbsensiController::class, 'rekapPadus'])->name('rekap.padus');
    Route::get('/rekap-pmr', [AbsensiController::class, 'rekapPmr'])->name('rekap.pmr');
    Route::get('/rekap-silat', [AbsensiController::class, 'rekapSilat'])->name('rekap.silat');
    Route::get('/rekap-tari', [AbsensiController::class, 'rekapTari'])->name('rekap.tari');
    Route::get('/rekap-tataboga', [AbsensiController::class, 'rekapTataboga'])->name('rekap.tataboga');
    Route::get('/rekap-tatabusana', [AbsensiController::class, 'rekapTatabusana'])->name('rekap.tatabusana');
    Route::get('/rekap-tatarias', [AbsensiController::class, 'rekapTatarias'])->name('rekap.tatarias');
    Route::get('/rekap-pramuka', [AbsensiController::class, 'rekapPramuka'])->name('rekap.pramuka');



});

/*
|--------------------------------------------------------------------------
| PEMBINA ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['role:pembina'])
    ->prefix('pembina')
    ->name('pembina.')
    ->group(function () {

        Route::view('/dashboard', 'pembina.dashboard')->name('dashboard');
        Route::get('/beranda', [\App\Http\Controllers\Pembina\DashboardPembinaController::class, 'index'])
    ->name('beranda');

        // INI YANG BENAR
        Route::get('/konfirmasi', [KonfirmasiPendaftaranController::class, 'index'])->name('konfirmasi');
        Route::post('/konfirmasi/terima/{id}', [KonfirmasiPendaftaranController::class, 'terima'])->name('terima');
        Route::post('/konfirmasi/tolak/{id}', [KonfirmasiPendaftaranController::class, 'tolak'])->name('tolak');



        Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

        // NOTIFIKASI
        Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');
        Route::post('/notifikasi', [NotifikasiController::class, 'store'])->name('notifikasi.store');

        // SERTIFIKAT
        Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
        Route::post('/sertifikat/generate', [SertifikatController::class, 'generate'])->name('sertifikat.generate');
        Route::get('/sertifikat/download/{id}', [SertifikatController::class, 'download'])->name('sertifikat.download');
        Route::get('/sertifikat/{id}/preview', [SertifikatController::class, 'preview'])->name('sertifikat.preview');
        Route::delete('/sertifikat/{id}/delete', [SertifikatController::class, 'destroy'])->name('sertifikat.destroy');

        // REKAP
        Route::get('/rekap', [RekapController::class, 'index'])->name('rekap');
       Route::get('/absen-siswa/download',
    [RekapAbsensiPembinaController::class, 'downloadExcel']
)->name('absen_siswa.download');

        Route::get('/absen',
    [\App\Http\Controllers\Pembina\RekapAbsensiPembinaController::class, 'index']
)->name('absen');
Route::get('/absen-siswa/download',
    [\App\Http\Controllers\Pembina\RekapAbsensiPembinaController::class, 'download']
)->name('absen_siswa.download');

    });

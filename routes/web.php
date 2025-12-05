<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pembina\SertifikatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\PembinaController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Pembina\NotifikasiController;

/*
|--------------------------------------------------------------------------
| Routes untuk Siswa
|--------------------------------------------------------------------------
*/
Route::middleware(['role:siswa'])
    ->prefix('siswa')
    ->name('siswa.')
    ->group(function () {
        Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');
        Route::get('/ekstrakulikuler', [HomeController::class, 'ekstrakulikuler'])->name('ekstrakulikuler');
        Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
        Route::get('/tambah-ekskul', [HomeController::class, 'tambahEkskul'])->name('tambahEkskul');
        Route::get('/ekskul-terdaftar', [HomeController::class, 'ekskulTerdaftar'])->name('ekskulTerdaftar');
        Route::get('/notifikasi', [HomeController::class, 'notifikasi'])->name('notifikasi');
        Route::get('/lihatekskul', [HomeController::class, 'lihatEkskul'])->name('lihatekskul');
        Route::get('/detailTerdaftar', [HomeController::class, 'detailTerdaftar'])->name('detailTerdaftar');
        Route::get('/absen', [HomeController::class, 'absen'])->name('absen');
        Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('jadwal');
        Route::get('/sertifikat', [HomeController::class, 'sertifikat'])->name('sertifikat');
        Route::get('/formpendaftaran', [HomeController::class, 'formpendaftaran'])->name('formpendaftaran');

    });

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/
Route::get('/logout/confirm', function () {
    return view('siswa.logout');
})->name('logout.confirm');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Redirect ke Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/notifikasi', function() {
        return view('admin.notifikasi');
    })->name('notifikasi');

    Route::get('/profil', function() {
        return view('admin.profil_admin');
    })->name('profil.admin');

    /* DATA SISWA CRUD */
    Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data.siswa');
    Route::get('/data-siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/data-siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/data-siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/data-siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/data-siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    /* DATA PEMBINA CRUD */
    Route::get('/data-pembina', [PembinaController::class, 'index'])->name('data.pembina');
    Route::get('/data-pembina/create', [PembinaController::class, 'create'])->name('create.pembina');
    Route::post('/data-pembina/store', [PembinaController::class, 'store'])->name('pembina.store');
    Route::get('/data-pembina/{id}/edit', [PembinaController::class, 'edit'])->name('edit.pembina');
    Route::put('/data-pembina/{id}/update', [PembinaController::class, 'update'])->name('pembina.update');
    Route::delete('/data-pembina/{id}/delete', [PembinaController::class, 'destroy'])->name('pembina.destroy');

    /* MONITORING EKSKUL */
    Route::view('/monitoring', 'admin.monitoring')->name('monitoring');
    Route::view('/monitoring/ekskul-pembina', 'admin.monitoring_ekskul_pembina')->name('monitoring.ekskul.pembina');
    Route::view('/monitoring/ekskul', 'admin.monitoring_ekskul')->name('monitoring.ekskul');
    Route::view('/monitoring/pendaftaran', 'admin.monitoring_pendaftaran')->name('monitoring.pendaftaran');
    Route::view('/monitoring/reward', 'admin.monitoring_reward')->name('monitoring.reward');

    /* REKAP ABSEN */
    Route::view('/rekap-absen', 'admin.rekap_absen')->name('rekap.absen');
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

    /* KELOLA NOTIFIKASI */
    Route::view('/kelola-notifikasi', 'admin.kelola_notifikasi')->name('kelola.notifikasi');
});

/* TOMBOL LOGOUT */
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

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
| PEMBINA ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['role:pembina'])
    ->prefix('pembina')
    ->name('pembina.')
    ->group(function () {

        Route::view('/beranda', 'pembina.beranda')->name('beranda');
        Route::view('/konfirmasi', 'pembina.konfirmasi_pendaftaran')->name('konfirmasi');
        Route::view('/absen', 'pembina.absen_siswa')->name('absen');
        Route::view('/rekap', 'pembina.rekap_absen')->name('rekap');

        // Notifikasi Pembina
        Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');
        Route::post('/notifikasi', [NotifikasiController::class, 'store'])->name('notifikasi.store');

        // Sertifikat
        Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
        Route::post('/sertifikat/generate', [SertifikatController::class, 'generate'])->name('sertifikat.generate');
        Route::get('/sertifikat/download/{id}', [SertifikatController::class, 'download'])->name('sertifikat.download');
    });

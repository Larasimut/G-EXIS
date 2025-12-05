<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pembina\SertifikatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\PembinaController;
use App\Http\Controllers\Admin\AbsensiController;


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

    // ======================= DASHBOARD =======================
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

        Route::get('/admin/notifikasi', function() {
    return view('admin.notifikasi');
})->name('notifikasi');

Route::get('/admin/profil', function() {
    return view('admin.profil_admin');
})->name('profil.admin');


    /*
    |--------------------------------------------------------------------------
    | DATA SISWA CRUD
    |--------------------------------------------------------------------------
    */
    Route::get('/data-siswa', [SiswaController::class, 'index'])->name('data.siswa');
    Route::get('/data-siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/data-siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/data-siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/data-siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/data-siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    /*
    |--------------------------------------------------------------------------
    | DATA PEMBINA CRUD
    |--------------------------------------------------------------------------
    */
    /* DATA PEMBINA CRUD */
Route::get('/data-pembina', [PembinaController::class, 'index'])
    ->name('data.pembina');

Route::get('/data-pembina/create', [PembinaController::class, 'create'])
    ->name('create.pembina');

Route::post('/data-pembina/store', [PembinaController::class, 'store'])
    ->name('pembina.store');

Route::get('/data-pembina/{id}/edit', [PembinaController::class, 'edit'])
    ->name('edit.pembina');

Route::put('/data-pembina/{id}/update', [PembinaController::class, 'update'])
    ->name('pembina.update');

Route::delete('/data-pembina/{id}/delete', [PembinaController::class, 'destroy'])
    ->name('pembina.destroy');


    /*
|--------------------------------------------------------------------------
| MONITORING EKSKUL
|--------------------------------------------------------------------------
*/
Route::get('/monitoring', function () {
    return view('admin.monitoring');
})->name('monitoring');

Route::get('/monitoring/ekskul-pembina', function () {
    return view('admin.monitoring_ekskul_pembina');
})->name('monitoring.ekskul.pembina');

Route::get('/monitoring/ekskul', function () {
    return view('admin.monitoring_ekskul');
})->name('monitoring.ekskul');

Route::get('/monitoring/pendaftaran', function () {
    return view('admin.monitoring_pendaftaran');
})->name('monitoring.pendaftaran');

Route::get('/monitoring/reward', function () {
    return view('admin.monitoring_reward');
})->name('monitoring.reward');
    
   /*
|--------------------------------------------------------------------------
| REKAP ABSEN
|--------------------------------------------------------------------------
*/

Route::get('/rekap-absen', function () {
    return view('admin.rekap_absen');
})->name('rekap.absen');

Route::get('/rekap-paskib', [AbsensiController::class, 'rekapPaskib'])
    ->name('rekap.paskib');

Route::get('/rekap-ec', [AbsensiController::class, 'rekapEC'])
    ->name('rekap.ec');

Route::get('/rekap-coding', [AbsensiController::class, 'rekapCoding'])
    ->name('rekap.coding');

Route::get('/rekap-voly', [AbsensiController::class, 'rekapVoly'])
    ->name('rekap.voly');
// ======================= REKAP ABSEN LAINNYA =======================

// Aksara
Route::get('/rekap-aksara', [AbsensiController::class, 'rekapAksara'])
    ->name('rekap.aksara');

// Basket
Route::get('/rekap-basket', [AbsensiController::class, 'rekapBasket'])
    ->name('rekap.basket');

// Design & Printing
Route::get('/rekap-design', [AbsensiController::class, 'rekapDesign'])
    ->name('rekap.design');

// Drumband
Route::get('/rekap-drumband', [AbsensiController::class, 'rekapDrumband'])
    ->name('rekap.drumband');

// Fotografi
Route::get('/rekap-fotografi', [AbsensiController::class, 'rekapFotografi'])
    ->name('rekap.fotografi');

// Futsal
Route::get('/rekap-futsal', [AbsensiController::class, 'rekapFutsal'])
    ->name('rekap.futsal');

// Irma
Route::get('/rekap-irma', [AbsensiController::class, 'rekapIrma'])
    ->name('rekap.irma');

// Karate
Route::get('/rekap-karate', [AbsensiController::class, 'rekapKarate'])
    ->name('rekap.karate');

// Karawitan
Route::get('/rekap-karawitan', [AbsensiController::class, 'rekapKarawitan'])
    ->name('rekap.karawitan');

// Kir
Route::get('/rekap-kir', [AbsensiController::class, 'rekapKir'])
    ->name('rekap.kir');

// Paduan Suara
Route::get('/rekap-padus', [AbsensiController::class, 'rekapPadus'])
    ->name('rekap.padus');

// PMR
Route::get('/rekap-pmr', [AbsensiController::class, 'rekapPmr'])
    ->name('rekap.pmr');

// Pencak Silat
Route::get('/rekap-silat', [AbsensiController::class, 'rekapSilat'])
    ->name('rekap.silat');

// Seni Tari
Route::get('/rekap-tari', [AbsensiController::class, 'rekapTari'])
    ->name('rekap.tari');

// Tata Boga
Route::get('/rekap-tataboga', [AbsensiController::class, 'rekapTataboga'])
    ->name('rekap.tataboga');

// Tata Busana
Route::get('/rekap-tatabusana', [AbsensiController::class, 'rekapTatabusana'])
    ->name('rekap.tatabusana');

// Tata Rias
Route::get('/rekap-tatarias', [AbsensiController::class, 'rekapTatarias'])
    ->name('rekap.tatarias');

// Pramuka
Route::get('/rekap-pramuka', [AbsensiController::class, 'rekapPramuka'])
    ->name('rekap.pramuka');


    /*
    |--------------------------------------------------------------------------
    | KELOLA NOTIFIKASI
    |--------------------------------------------------------------------------
    */
    Route::view('/kelola-notifikasi', 'admin.kelola_notifikasi')->name('kelola.notifikasi');

});
/*
    |--------------------------------------------------------------------------
    | TOMBOL LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

/* ======================= END ADMIN ROUTES ======================= */


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
Route::prefix('pembina')->name('pembina.')->group(function () {

    Route::view('/beranda', 'pembina.beranda')->name('beranda');
    Route::view('/konfirmasi', 'pembina.konfirmasi_pendaftaran')->name('konfirmasi');
    Route::view('/absen', 'pembina.absen_siswa')->name('absen');
    Route::view('/notifikasi', 'pembina.notifikasi')->name('notifikasi');
    Route::view('/rekap', 'pembina.rekap_absen')->name('rekap');

    Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
    Route::post('/sertifikat/generate', [SertifikatController::class, 'generate'])->name('sertifikat.generate');
    Route::get('/sertifikat/download/{id}', [SertifikatController::class, 'download'])->name('sertifikat.download');

});

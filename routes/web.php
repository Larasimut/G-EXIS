<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pembina\SertifikatController;
use App\Http\Controllers\HomeController;

Route::prefix('siswa')->name('siswa.')->group(function () {
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
});


Route::get('/logout/confirm', function () {
    return view('siswa.logout');
})->name('logout.confirm');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.process');


/*
|--------------------------------------------------------------------------
| Pembina Routes
|--------------------------------------------------------------------------
*/
Route::prefix('pembina')->name('pembina.')->group(function () {

    // Beranda
    Route::view('/beranda', 'pembina.beranda')->name('beranda');

    // Konfirmasi pendaftaran
    Route::view('/konfirmasi', 'pembina.konfirmasi_pendaftaran')->name('konfirmasi');

    // Absen siswa
    Route::view('/absen', 'pembina.absen_siswa')->name('absen');

    // Notifikasi
    Route::view('/notifikasi', 'pembina.notifikasi')->name('notifikasi');

    // Rekap absen
    Route::view('/rekap', 'pembina.rekap_absen')->name('rekap');

  // Sertifikat — CRUD sederhana
Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
Route::post('/sertifikat/generate', [SertifikatController::class, 'generate'])->name('sertifikat.generate');
Route::get('/sertifikat/download/{id}', [SertifikatController::class, 'download'])->name('sertifikat.download');

});

<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


// Route::resource('/daftar', FormController::class);
// Route::resource('/bidang', BidangController::class)->middleware('auth');
// Route::resource('/pendaftaran', PendaftarController::class);
// Route::resource('/anggota', AnggotaController::class);
Route::middleware(['auth'])->group(function () {
    Route::resource('/bidang', BidangController::class);
    Route::resource('/pendaftaran', PendaftarController::class);
    Route::resource('/anggota', AnggotaController::class);
});

Route::resource('/form', DashboardController::class);
Route::get('/hasilseleksi', [DashboardController::class, 'dataPendaftar']);
Route::get('/cetak', [AnggotaController::class, 'cetakData']);
Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('/validasilogin', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);
Route::resource('/blog', BlogController::class);
Route::resource('/berita', BeritaController::class);
Route::get('/dashboard',[DashboardController::class, 'dashboard']);



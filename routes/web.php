<?php

use App\Http\Controllers\LaporanController;
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
    return view('welcome');
});

// ADMIN DAN PIMPINAN
Route::get('/admin', function () {
    return view('admin/dashboard/dashboard');
});


Route::get('/admin/pengajuan', function () {
    return view('admin/pengajuan/pengajuan');
});

Route::get('/admin/pengguna', function () {
    return view('admin/pengguna/pengguna');
});


Route::get('/admin/laporan', function () {
    return view('admin/laporan/laporan');
});



Route::get('/login', function () {
    return view('auth/login');
});


Route::get('/daftar', function () {
    return view('auth/daftar');
});

// LAPORAN
Route::get('admin/laporan/cetak', [LaporanController::class, 'cetakLaporan']);





// WARGA

Route::get('/warga', function () {
    return view('warga/dashboard/dashboard');
});

Route::get('/warga/pengajuan', function () {
    return view('warga/pengajuan/pengajuan');
});

Route::get('/warga/laporan', function () {
    return view('warga/laporan/laporan');
});

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('admin')->group(function () {

// ADMIN DAN PIMPINAN
    Route::get('/', function () {
        return view('admin/dashboard/dashboard');
    });

    Route::prefix('pengajuan')->group(function (){
        Route::match(['POST','GET'],'', [\App\Http\Controllers\Admin\PengajuanSuratController::class,'index'])->name('admin.pengajuan');
        Route::get('datatable', [\App\Http\Controllers\Admin\PengajuanSuratController::class,'datatable'])->name('admin.pengajuan.datatable');
        Route::get('cetak', [\App\Http\Controllers\Admin\PengajuanSuratController::class,'cetak'])->name('admin.pengajuan.cetak');
    });
    Route::prefix('tipe-surat')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\TipeSuratController::class,'index'])->name('admin.tipesurat');
        Route::post('post', [\App\Http\Controllers\Admin\TipeSuratController::class,'storeData'])->name('admin.tipesurat.post');
        Route::post('', [\App\Http\Controllers\Admin\TipeSuratController::class,'remove'])->name('admin.tipesurat.delete');
        Route::get('datatable', [\App\Http\Controllers\Admin\TipeSuratController::class,'datatable'])->name('admin.tipesurat.datatable');
    });
    Route::prefix('pengguna')->group(function () {
        Route::match(['POST', 'GET'], '', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.pengguna');
        Route::get('datatable', [\App\Http\Controllers\Admin\UserController::class, 'datatable'])->name('admin.pengguna.datatable');
        Route::get('get-by-id/{id}', [\App\Http\Controllers\Admin\UserController::class, 'findUserById'])->name('admin.pengguna.find.id');
    });

    Route::prefix('laporan')->group(function (){
        Route::get('', [\App\Http\Controllers\Admin\LaporanPengajuanSuratController::class,'index'])->name('admin.laporan');
        Route::get('datatable', [\App\Http\Controllers\Admin\LaporanPengajuanSuratController::class,'datatable'])->name('admin.laporan.datatable');
    });
});



// LAPORAN
Route::get('admin/laporan/cetak', [LaporanController::class, 'cetakLaporan']);

// WARGA

Route::prefix('warga')->group(function (){
    Route::get('', function () {
        return view('warga/dashboard/dashboard');
    });

    Route::prefix('pengajuan')->group(function (){
        Route::match(['POST','GET'],'', [\App\Http\Controllers\Warga\PengajuanSuratController::class,'index'])->name('warga.pengajuan');
        Route::get('datatable', [\App\Http\Controllers\Warga\PengajuanSuratController::class,'datatable'])->name('warga.pengajuan.datatable');
    });
    Route::prefix('laporan')->group(function (){
        Route::get('', [\App\Http\Controllers\Warga\LaporanPengajuanSuratController::class,'index'])->name('warga.laporan');
        Route::get('datatable', [\App\Http\Controllers\Warga\LaporanPengajuanSuratController::class,'datatable'])->name('warga.laporan.datatable');
    });
});



Route::match(['POST','GET'],'/', [\App\Http\Controllers\LoginController::class,'index'])->name('login');

Route::match(['POST','GET'],'/daftar', [\App\Http\Controllers\RegisterController::class,'index'])->name('register');

Route::get('/logout',[\App\Http\Controllers\LoginController::class,'logout']);

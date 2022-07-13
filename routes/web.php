<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;

use App\Http\Controller\PaketController;

use App\Http\Controller\PasienController;

use App\Http\Controller\FormController;

use App\Http\Controller\HasilController;

use App\Http\Controller\ProfilController;
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

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'redirect']);

Route::get('/admin.paket', [App\Http\Controllers\PaketController::class, 'index']);

Route::get('/admin.tambahPaket', [App\Http\Controllers\PaketController::class, 'create']);

Route::post('/simpan', [App\Http\Controllers\PaketController::class, 'store']);

Route::get('/editPaket/{id}', [App\Http\Controllers\PaketController::class, 'edit'])->middleware('auth')->name('editPaket');

Route::put('/updatePaket/{id}', [App\Http\Controllers\PaketController::class, 'update'])->middleware('auth')->name('updatePaket');

Route::delete('/deletePaket/{id}', [App\Http\Controllers\PaketController::class, 'destroy'])->middleware('auth')->name('deletePaket');

Route::get('/admin.admin', [App\Http\Controllers\AdminController::class, 'index']);

Route::get('/admin.pasien', [App\Http\Controllers\PasienController::class, 'index']);

Route::get('/user.form', [App\Http\Controllers\FormController::class, 'index']);

Route::get('/admin.detailPasien/{id}', [App\Http\Controllers\DetailController::class, 'index']);

Route::post('/simpandata', [App\Http\Controllers\FormController::class, 'store']);

Route::get('/user.validasi', [App\Http\Controllers\FormController::class, 'validasi']);

Route::get('/admin.mcu', [App\Http\Controllers\HasilController::class, 'index'])->name('admin.mcu');

Route::get('/admin.kirim/{id}', [App\Http\Controllers\HasilController::class, 'kirim'])->name('admin.kirim');

Route::get('/user.profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('user.profil');

Route::post('/user.update', [App\Http\Controllers\ProfilController::class, 'update'])->name('user.update');

Route::get('/user.cetakmcu/{id}', [App\Http\Controllers\ProfilController::class, 'cetak'])->name('cetakmcu');

Route::get('/admin.tambahHasil', [App\Http\Controllers\HasilController::class, 'create'])->name('createhasil');

Route::post('/admin.storeHasil', [App\Http\Controllers\HasilController::class, 'store'])->name('storehasil');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

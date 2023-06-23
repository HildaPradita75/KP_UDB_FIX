<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelolakelasController;
use App\Http\Controllers\KelolapesertadidikController;
use App\Http\Controllers\UDBController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/kelolapesertadidik', [App\Http\Controllers\KelolapesertadidikController::class, 'index'])->name('kelolapesertadidik');

Route::get('/kelolapembayaran/UDB', [App\Http\Controllers\UDBController::class, 'index'])->name('UDB');

Route::get('/kelolapembayaran/UDT', [App\Http\Controllers\UDBController::class, 'index'])->name('UDT');

// Route::get('/kelolapembayaran', [App\Http\Controllers\KelolapembayaranController::class, 'index'])->name('kelolapembayaran');




Route::get('/kelolakelas', [App\Http\Controllers\KelolakelasController::class, 'index'])->name('kelolakelas');

Route::get('/admin', [KelolakelasController::class, 'index'])->name('kelolakelas');

Route::post('/admin/add', [KelolakelasController::class, 'store'])->name('tambah');

Route::get('admin/kelolakelas/delete/{id}', [KelolakelasController::class,'hapus'])->name('hapus');



Route::get('admin/ajaxadmin/dataUser/{id}', [KelolakelasController::class, 'getDataUser']);
Route::patch('admin/petugas/update', [KelolakelasController::class, 'edit'])->name('kelolakelas.ubah');
<?php
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AsetController;

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

// Route untuk Ruangan (versi lokal Anda)
Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan.index');
Route::get('/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');
Route::post('/ruangan', [RuanganController::class, 'store'])->name('ruangan.store');
Route::get('/ruangan/{id}/edit', [RuanganController::class, 'edit'])->name('ruangan.edit');
Route::put('/ruangan/{id}', [RuanganController::class, 'update'])->name('ruangan.update');
Route::delete('/ruangan/{id}', [RuanganController::class, 'destroy'])->name('ruangan.destroy');

// Route untuk Kategori (versi remote)
Route::resource('kategori', KategoriController::class);
Route::get('/kategori', [KategoriController::class, 'index']) ->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create']) ->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']) ->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']) ->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update']) ->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']) ->name('kategori.destroy');

// Route untuk aset
Route::get('/aset', [AsetController::class, 'index']) ->name('aset.index');
Route::get('/aset/create', [AsetController::class, 'create']) ->name('aset.create');
Route::post('/aset', [AsetController::class, 'store']) ->name('aset.store');
Route::get('/aset/{id}/edit', [AsetController::class, 'edit']) ->name('aset.edit');
Route::put('/aset/{id}', [AsetController::class, 'update']) ->name('aset.update');
Route::delete('/aset/{id}', [AsetController::class, 'destroy']) ->name('aset.destroy');

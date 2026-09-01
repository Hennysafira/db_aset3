<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AsetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama langsung ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/ruangan', [RuanganController::class, 'index'])
    ->name('ruangan.index');

Route::get('/ruangan/create', [RuanganController::class, 'create'])
    ->name('ruangan.create');

Route::post('/ruangan', [RuanganController::class, 'store'])
    ->name('ruangan.store');

Route::get('/ruangan/{id}/edit', [RuanganController::class, 'edit'])
    ->name('ruangan.edit');

Route::put('/ruangan/{id}', [RuanganController::class, 'update'])
    ->name('ruangan.update');

Route::delete('/ruangan/{id}', [RuanganController::class, 'destroy'])
    ->name('ruangan.destroy');



Route::resource('kategori', KategoriController::class);



Route::get('/aset', [AsetController::class, 'index'])
    ->name('aset.index');

Route::get('/aset/create', [AsetController::class, 'create'])
    ->name('aset.create');

Route::post('/aset', [AsetController::class, 'store'])
    ->name('aset.store');

Route::get('/aset/{id}/edit', [AsetController::class, 'edit'])
    ->name('aset.edit');

Route::put('/aset/{id}', [AsetController::class, 'update'])
    ->name('aset.update');

Route::delete('/aset/{id}', [AsetController::class, 'destroy'])
    ->name('aset.destroy');

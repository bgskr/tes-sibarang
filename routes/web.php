<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\JenisBarang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Auth/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/user', [UserController::class, 'index'])->name('user');
    Route::post('/dashboard/user', [UserController::class, 'store'])->name('users.create');
    Route::patch('/dashboard/user/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/dashboard/user/{id}', [UserController::class, 'destroy'])->name('users.delete');

    Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang');
    Route::post('/dashboard/barang', [BarangController::class, 'store'])->name('barang.create');
    Route::patch('/dashboard/barang/{id_barang}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/dashboard/barang/hapus/{id_barang}', [BarangController::class, 'destroy'])->name('barang.delete');

    Route::get('/dashboard/jenis-barang', [JenisBarangController::class, 'index'])->name('jenis-barang');
    Route::post('/dashboard/jenis-barang', [JenisBarangController::class, 'store'])->name('jenisbarang.create');
    Route::patch('/dashboard/jenis-barang/{id_barang}', [JenisBarangController::class, 'update'])->name('jenisbarang.update');
    Route::delete('/dashboard/jenis-barang/hapus/{id_barang}', [JenisBarangController::class, 'destroy'])->name('jenisbarang.delete');
});

require __DIR__.'/auth.php';

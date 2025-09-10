<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Halaman katalog publik
Route::get('/katalog', [KatalogController::class, 'katalog'])->name('katalog');

// Dashboard contoh (opsional, bisa dihapus kalau tidak perlu)
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

// CRUD Produk untuk Admin (hanya bisa diakses setelah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [ProductController::class, 'index'])->name('admin.index');
    Route::get('/admin/produk/create', [ProductController::class, 'create'])->name('admin.create');
    Route::post('/admin/produk', [ProductController::class, 'store'])->name('admin.store');
    Route::get('/admin/produk/{id}/edit', [ProductController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/produk/{id}', [ProductController::class, 'update'])->name('admin.update');
    Route::delete('/admin/produk/{id}', [ProductController::class, 'destroy'])->name('admin.destroy');

    // profile bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route auth bawaan Breeze
require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin', [
        'title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page']);
});

Route::get('/katalog', function () {
    return view('katalog', [
        'title' => 'Katalog Page']);
});

use App\Http\Controllers\ProductController;

Route::get('/produk', [ProductController::class, 'index']);


use App\Http\Controllers\ProdukController;

Route::get('/katalog', [ProductController::class, 'index'])->name('produk.index');

// Admin import
Route::post('/admin/import-produk', [ProductController::class, 'import'])->name('produk.import');

use App\Http\Controllers\KatalogController;

Route::get('/katalog', [KatalogController::class, 'index']);

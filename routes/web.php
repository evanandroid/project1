<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About']);
});

Route::get('/katalog', function () {
    return view('katalog', [
        'title' => 'Katalog']);
});

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);



<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class KatalogController extends Controller
{
    public function index()
    {
        // ambil semua produk, lalu kelompokkan berdasarkan merk
        $produks = Produk::all()->groupBy('merk');

        return view('katalog', compact('produks'));
    }
}

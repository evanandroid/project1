<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Imports\ProdukImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    // Halaman katalog
    public function index()
    {
        $produks = Produk::all()->groupBy('merks');
        return view('katalog', compact('produk'));
    }

    // Upload dataset dari admin

public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,csv',
    ]);

    Excel::import(new ProdukImport, $request->file('file'));

    return back()->with('success', 'Data produk berhasil diimport!');
}

}

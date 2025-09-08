<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    \App\Models\Produk::insert([
        [
            'nama_produk' => 'Iphone 16',
            'gambar' => 'image/iphone16.png',
            'spesifikasi' => 'Black',
            'merk' => 'Iphone',
            'price' => 25000000,
            'logo' => 'image/applelogo.png'
        ],
        [
            'nama_produk' => 'samsung Galaxy S25',
            'gambar' => 'image/samsungs25.jpg',
            'spesifikasi' => 'Black',
            'merk' => 'Iphone',
            'price' => 25000000,
            'logo' => 'image/samsunglogo.png'
        ]
    ]);
}

}

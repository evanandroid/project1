<?php
namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProdukImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Produk([
            'nama'        => $row['nama_produk'],
            'merks'       => $row['merk'],
            'harga'       => $row['harga'],
            'spesifikasi' => $row['spesifikasi'],
            'gambar'      => $row['gambar'] ?? null,
            'logo'        => $row['logo'] ?? null,
        ]);
    }
}

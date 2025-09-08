<?php
// app/Models/Merk.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['nama', 'logo'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}

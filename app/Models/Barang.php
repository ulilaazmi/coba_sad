<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'detail_barang',
        'harga_barang',
        'stok_barang',
        'image_barang',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'id_barang', 'nama_barang', 'harga', 'stok'
    ];
}

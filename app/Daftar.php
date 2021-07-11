<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = [
        'kd_pasien', 'nama_pasien', 'tanggal_lahir', 'jk', 'tanggal_masuk'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $fillable = [
        'kd_pasien', 'nama_pasien', 'penyakit_diderita', 'penyakit_dialami', 'keterangan'
    ];
}

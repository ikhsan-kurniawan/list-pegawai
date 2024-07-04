<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'Pegawai';

    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'agama',
        'gambar',
    ];
}

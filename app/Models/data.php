<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table = 'gudang';
    protected $fillable = ['namabarang', 'pengirim', 'penerima','statusbarang', 'alamat'];

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $fillable = ['nama_paket', 'kecepatan', 'harga', 'deskripsi'];
}

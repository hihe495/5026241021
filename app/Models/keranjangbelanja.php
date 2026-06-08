<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjangbelanja extends Model
{
    protected $table = 'keranjangbelanja';
    public $timestamps = false;

    protected $fillable = [
        'KodeBarang',
        'Jumlah',
        'Harga'
    ];
}

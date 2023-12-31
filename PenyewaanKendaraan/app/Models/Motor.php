<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    protected $table = 'data_motor';
    protected $fillable = [
        'nama_motor',
        'brand_motor',
        'warna_motor',
        'plat_motor',
        'mitra_motor',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahmobil extends Model
{
    use HasFactory;
    protected $table = 'data_mobil';
    protected $fillable = ['nama_mobil', 'brand_mobil', 'warna_mobil', 'plat_mobil', 'mitra_mobil'];
}

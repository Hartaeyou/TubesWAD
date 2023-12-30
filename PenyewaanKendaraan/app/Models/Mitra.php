<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'data_mitra';
    protected $fillable = ['nama_mitra', 'nomor_telepon', 'alamat_mitra'];
}

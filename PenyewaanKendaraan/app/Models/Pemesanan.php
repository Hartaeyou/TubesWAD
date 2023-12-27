<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = ['nama', 'jenis_kendaraan', 'plat', 'pembayaran', 'tanggal_masuk', 'tanggal_keluar'];
}

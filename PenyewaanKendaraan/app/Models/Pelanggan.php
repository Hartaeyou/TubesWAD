<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table ="data_customer";
    protected $fillable = ['nama_customer', 'nomor_telepon', 'email_customer'];
}

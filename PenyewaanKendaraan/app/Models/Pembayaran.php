<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['pemesanan_id', 'amount', 'status'];

    public function pemesanan() {
        return $this->belongsTo(Pemesanan::class);
    }
}

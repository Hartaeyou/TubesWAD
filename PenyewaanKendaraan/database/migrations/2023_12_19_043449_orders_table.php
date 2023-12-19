<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelanggan');
            $table->string('jenis_kendaraan');
            $table->unsignedBigInteger('id_mobil')->nullable();
            $table->foreign('id_mobil')->references('id')->on('data_mobil');
            $table->unsignedBigInteger('id_motor')->nullable();
            $table->foreign('id_motor')->references('id')->on('data_motor');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_penggembalian');
            $table->boolean('status_pembayaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_pemesanan');
    }
};

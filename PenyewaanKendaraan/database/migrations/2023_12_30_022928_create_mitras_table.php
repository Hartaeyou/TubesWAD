<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mitra');
            $table->string('nomor_telepon');
            $table->string('alamat_mitra');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_mitra');  
    }
};
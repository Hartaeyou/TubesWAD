<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('brand_mobil');
            $table->string('warna_mobil');
            $table->string('plat_mobil');
            $table->string('mitra_mobil');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_mobil');
    }
};
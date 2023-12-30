<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_motor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_motor');
            $table->string('brand_motor');
            $table->string('warna_motor');
            $table->string('plat_motor');
            $table->string('mitra_motor');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_motor');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('timbangans', function (Blueprint $table) {
            $table->id();
            $table->integer('umur');
            $table->string('nama_orangtua');
            $table->integer('lingkar_kepala');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->date('tanggal_periksa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timbangans');
    }
};

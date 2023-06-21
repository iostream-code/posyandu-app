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
        Schema::create('ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama');
            $table->integer('kehamilan_ke');
            $table->integer('umur_kehamilan');
            $table->char('golongan_darah');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->date('tanggal_kehamilan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_hamils');
    }
};

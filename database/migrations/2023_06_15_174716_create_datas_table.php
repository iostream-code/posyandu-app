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
        Schema::create('datas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_imuniasasi')->constrained('imunisasis')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_kehamilan')->constrained('ibu_hamils')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('id_timbangan')->constrained('timbangans')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datas');
    }
};

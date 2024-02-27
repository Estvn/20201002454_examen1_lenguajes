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
        Schema::create('vueloasientos', function (Blueprint $table) {
            $table->id('ID_TIPO_ASIENTO');
            $table->string('NUMERO_VUELO', 5);
            $table->string('NUMERO_ASIENTO', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vueloasientos');
    }
};

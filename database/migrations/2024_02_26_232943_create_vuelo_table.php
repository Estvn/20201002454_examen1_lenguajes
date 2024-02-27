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
        Schema::create('vuelo', function (Blueprint $table) {
            $table->string('NUMERO_VUELO', 5)->primary();
            $table->string('ORIGEN', 10);
            $table->string('DESTINO', 10);
            $table->timestamp('FECHA_SALIDA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelo');
    }
};

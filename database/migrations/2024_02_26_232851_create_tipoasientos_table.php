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
        Schema::create('tipoasientos', function (Blueprint $table) {
            $table->id('ID_TIPO_ASIENTO')->autoIncrement();
            $table->string('DESCRIPCION');
            $table->double('PRECIO');
            $table->string('ESTADO', 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipoasientos');
    }
};

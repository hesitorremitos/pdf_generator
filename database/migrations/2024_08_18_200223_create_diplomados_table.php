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
        Schema::create('diplomados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_persona');
            $table->string('ci',12);
            // El estado solo puede ser 'activo' o 'inactivo'
            $table->enum('estado', ['activo', 'inactivo']);
            $table->integer('numero_carton');
            $table->string('programa');
            $table->year('gestion_inicio');
            $table->year('gestion_fin');
            $table->string('tipo');
            $table->string('mencion');
            $table->integer('horas_academicas');
            $table->integer('creditos');
            $table->date('fecha_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomados');
    }
};

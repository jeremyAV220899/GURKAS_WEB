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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_sede',500);
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->char('cod_departamento',10);
            $table->char('cod_provincia',10);
            $table->char('cod_distrito',10);
            $table->string('direccion',500);
            $table->date('fecha_activacion');
            $table->date('fecha_baja');
            $table->string('longitud',100);
            $table->string('latitud',100);
            $table->string('contacto',150);
            $table->string('correo',100);
            $table->string('celular',10);
            $table->string('centro_costo',100);
            $table->foreignId('unidad_id')->references('id')->on('unidades');
            $table->string('ubicacion', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};

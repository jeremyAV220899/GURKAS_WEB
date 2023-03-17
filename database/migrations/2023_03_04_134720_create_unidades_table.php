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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social',500);
            $table->string('ruc',20);
            $table->string('nombre_comercial',200);
            $table->char('cod_departamento',10);
            $table->char('cod_provincia',10);
            $table->char('cod_distrito',10);
            $table->string('direccion',500)->nullable();
            $table->string('represetante_legal',150)->nullable();
            $table->string('doct_ident_repre_leg',20)->nullable();
            $table->string('cargo_repre_leg',100)->nullable();
            $table->string('contacto',150)->nullable();
            $table->string('telefono',10)->nullable();
            $table->string('celular',10)->nullable();
            $table->string('correo',100)->nullable();
            $table->string('centro_costo',100)->nullable();
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->foreignId('empresa_id')->references('id')->on('empresas');
            $table->date('fecha_activacion');
            $table->date('fecha_baja')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades');
    }
};

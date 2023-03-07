<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->id();
            $table->string('cod_empleado',15);//COMO PRINCIPAL
            $table->string('nombre_empleado', 50);
            $table->string('apellido_paterno', 50);
            $table->string('apellido_materno', 50);
            $table->string('nombre_completo', 50)->nullable();
            $table->string('foto')->nullable();
            $table->char('edad_empleado',4)->nullable();
            $table->date('fecha_nacimiento');
            $table->foreignId('genero_id')->references('id')->on('generos');
            $table->foreignId('documento_id')->references('id')->on('documentos');
            $table->string('doc_ident',15);
            $table->date('fecha_emision');
            $table->date('fecha_caducidad');
            $table->string('cod_ubigeo')->nullable();
            $table->foreignId('brevete_id')->references('id')->on('brevetes');
            $table->string('num_brevete',15);
            $table->foreignId('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->foreignId('departamento_id')->references('id')->on('departamentos');
            $table->foreignId('provincias_id')->references('id')->on('provincias');
            $table->foreignId('distritos_id')->references('id')->on('distritos');
            $table->string('direccion_personal',200)->nullable();
            $table->string('telefono',12)->nullable();
            $table->string('celular',12)->nullable();
            $table->string('correo',50)->nullable();
            $table->foreignId('horas_id')->references('id')->on('horas');
            $table->foreignId('situaciones_id')->references('id')->on('situaciones');
            $table->foreignId('grados_id')->references('id')->on('grados');
            $table->foreignId('estado_id')->references('id')->on('estados');
            $table->foreignId('puesto_id')->references('id')->on('puestos');
            $table->foreignId('empresa_id')->references('id')->on('empresas');
            $table->foreignId('contrato_id')->references('id')->on('contratos');
            $table->date('fecha_inicio_contrato')->nullable();
            $table->date('fecha_fin_contrato')->nullable();
            $table->foreignId('unidad_id')->references('id')->on('unidades');
            $table->foreignId('sede_id')->references('id')->on('sedes');
            $table->foreignId('turno_id')->references('id')->on('turnos');
            $table->foreignId('armado_id')->references('id')->on('armados');
            $table->foreignId('talla_id')->references('id')->on('tallas');
            $table->string('talla_pantalon',50)->nullable();
            $table->string('talla_calzado',50)->nullable();
            $table->string('estatura',50)->nullable();
            $table->date('fecha_inicio_laboral')->nullable();
            $table->date('fecha_fin_laboral')->nullable();
            $table->date('fecha_activacion_laboral')->nullable();
            //$table->date('fecha_destaque_laboral')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('personales');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laborales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->references('id')->on('personales');
            $table->string('t_moneda',50);
            $table->foreignId('banco_id')->references('id')->on('bancos');
            $table->string('cta_bancaria',100);
            $table->foreignId('pensionario_id')->references('id')->on('pensionarios');
            $table->foreignId('afp_id')->references('id')->on('afps');
            $table->string('afp_cuspp',100);
            $table->foreignId('comision_id')->references('id')->on('comisiones');
            $table->foreignId('movimiento_id')->references('id')->on('movimientos');
            $table->string('t_trabajador',50);
            $table->string('sueldo_basico',50);
            $table->string('sueldo_bruto',50);
            $table->string('asig_familiar',50);
            $table->string('t_pago',50);
            $table->string('remuneracion',50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laborales');
    }
};

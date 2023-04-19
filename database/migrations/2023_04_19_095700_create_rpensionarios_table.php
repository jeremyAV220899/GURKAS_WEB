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
        Schema::create('rpensionarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pensionario_id')->references('id')->on('pensionarios');
            $table->foreignId('afp_id')->references('id')->on('afps');
            $table->foreignId('comision_id')->references('id')->on('comisiones');
            $table->foreignId('movimiento_id')->references('id')->on('movimientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpensionarios');
    }
};

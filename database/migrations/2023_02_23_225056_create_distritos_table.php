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
        Schema::create('distritos', function (Blueprint $table) {
            $table->id('cod_distrito');
            $table->foreignId('cod_departamento')->references('cod_departamento')->on('departamentos');
            $table->foreignId('cod_provincia')->references('cod_provincia')->on('provincias');
            $table->string('desp_distrito',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distritos');
    }
};

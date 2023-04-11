<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->references('id')->on('personales');
            $table->char('num_hijos',1)->nullable();
            $table->string('pareja', 75)->nullable();
            $table->string('dniPareja',12)->nullable();
            $table->string('imgPareja')->nullable();
            $table->string('hijo1', 75)->nullable();
            $table->string('dnihijo1',12)->nullable();
            $table->string('imgDni1')->nullable();
            $table->string('hijo2', 75)->nullable();
            $table->string('dnihijo2', 12)->nullable();
            $table->string('imgDni2')->nullable();
            $table->string('hijo3', 75)->nullable();
            $table->string('dnihijo3', 12)->nullable();
            $table->string('imgDni3')->nullable();
            $table->string('hijo4', 12)->nullable();
            $table->string('dnihijo4', 12)->nullable();
            $table->string('imgDni4')->nullable();
            $table->timestamps();
        });
    }

     public function down(): void
    {
        Schema::dropIfExists('familiares');
    }
};

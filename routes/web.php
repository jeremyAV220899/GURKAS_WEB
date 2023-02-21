<?php

use App\Http\Controllers\PersonalRecursoController;
use App\Http\Controllers\UnidadComercialController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::controller(PersonalRecursoController::class)->group(function () {
        Route::get('/personal/index', 'index')->name('personal.index');
    });

    Route::controller(UsuarioController::class)->group(function () {
        Route::get('/usuario/perfil', 'perfil')->name('usuario.perfil');
    });

    Route::controller(UnidadComercialController::class)->group(function(){
        Route::get('/comercial/unidad', 'index')->name('comercial.unidad');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

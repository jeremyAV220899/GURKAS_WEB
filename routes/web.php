<?php

use App\Http\Controllers\AsistenciaPersonalReportesController;
use App\Http\Controllers\AsistenciaSedeReportesController;
use App\Http\Controllers\AsistenciaUnidadReportesController;
use App\Http\Controllers\C4Controller;
use App\Http\Controllers\EstadoReportesController;
use App\Http\Controllers\FamiliaresRecursosController;
use App\Http\Controllers\LaboralesRecursosController;
use App\Http\Controllers\PersonalRecursoController;
use App\Http\Controllers\SedeComercialController;
use App\Http\Controllers\UnidadComercialController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::controller(PersonalRecursoController::class)->group(function () {
        Route::get('/personal/index', 'index')->name('personal.index');
    });
    
    Route::controller(FamiliaresRecursosController::class)->group(function () {
        Route::get('/personal/familiares', 'index')->name('personal.familiares');
    });
    
    Route::controller(LaboralesRecursosController::class)->group(function () {
        Route::get('/personal/laborales', 'index')->name('personal.laborales');
    });

    Route::controller(UsuarioController::class)->group(function () {
        Route::get('/usuario/perfil', 'perfil')->name('usuario.perfil');
    });

    Route::controller(UnidadComercialController::class)->group(function(){
        Route::get('/comercial/unidad', 'index')->name('comercial.unidad');
    });

    Route::controller(SedeComercialController::class)->group(function(){
        Route::get('/comercial/sede', 'index')->name('comercial.sede');
    });
    
    Route::controller(C4Controller::class)->group(function(){
        Route::get('/reportes/c4', 'index')->name('reportes.c4');
    });
    
    Route::controller(EstadoReportesController::class)->group(function(){
        Route::get('/reportes/estado', 'index')->name('reportes.estado');
    });
    
    Route::controller(AsistenciaPersonalReportesController::class)->group(function(){
        Route::get('/reportes/asistencia/personal', 'index')->name('reportes.asistencia-personal');
    });

    Route::controller(AsistenciaUnidadReportesController::class)->group(function(){
        Route::get('/reportes/asistencia/unidad', 'index')->name('reportes.asistencia-unidad');
    });

    Route::controller(AsistenciaSedeReportesController::class)->group(function(){
        Route::get('/reportes/asistencia/sede', 'index')->name('reportes.asistencia-sede');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/linkear', function () {
    Artisan::call('storage:link');
});
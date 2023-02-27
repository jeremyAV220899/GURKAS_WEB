<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AsistenciaPersonalReportesController;
use App\Http\Controllers\AsistenciaSedeReportesController;
use App\Http\Controllers\AsistenciaUnidadReportesController;
use App\Http\Controllers\BusquedaPersonalDniController;
use App\Http\Controllers\BusquedaPersonalEdadController;
use App\Http\Controllers\BusquedaPersonalEmpresaController;
use App\Http\Controllers\BusquedaPersonalEstaturaController;
use App\Http\Controllers\BusquedaPersonalIngresoController;
use App\Http\Controllers\BusquedaPersonalSedeController;
use App\Http\Controllers\BusquedaPersonalTurnoController;
use App\Http\Controllers\BusquedaPersonalUnidadController;
use App\Http\Controllers\C4Controller;
use App\Http\Controllers\EstadoReportesController;
use App\Http\Controllers\FamiliaresRecursosController;
use App\Http\Controllers\LaboralesRecursosController;
use App\Http\Controllers\PersonalRecursoController;
use App\Http\Controllers\PlanillaAfpComisionController;
use App\Http\Controllers\PlanillaPersonalDatosController;
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

    Route::controller(BusquedaPersonalDniController::class)->group(function(){
        Route::get('/busqueda/dni', 'index')->name('busqueda.dni');
    });

    Route::controller(BusquedaPersonalTurnoController::class)->group(function(){
        Route::get('/busqueda/turno', 'index')->name('busqueda.turno');
    });

    Route::controller(BusquedaPersonalEstaturaController::class)->group(function(){
        Route::get('/busqueda/estatura', 'index')->name('busqueda.estatura');
    });
    
    Route::controller(BusquedaPersonalEdadController::class)->group(function(){
        Route::get('/busqueda/edad', 'index')->name('busqueda.edad');
    });
    
    Route::controller(BusquedaPersonalEmpresaController::class)->group(function(){
        Route::get('/busqueda/empresa', 'index')->name('busqueda.empresa');
    });

    Route::controller(BusquedaPersonalSedeController::class)->group(function(){
        Route::get('/busqueda/sede', 'index')->name('busqueda.sede');
    });

    Route::controller(BusquedaPersonalUnidadController::class)->group(function(){
        Route::get('/busqueda/unidad', 'index')->name('busqueda.unidad');
    });

    Route::controller(BusquedaPersonalIngresoController::class)->group(function(){
        Route::get('/busqueda/ingreso', 'index')->name('busqueda.ingreso');
    });
    
    Route::controller(PlanillaPersonalDatosController::class)->group(function(){
        Route::get('/planillas/datos', 'index')->name('planillas.datos');
    });
     
    Route::controller(PlanillaAfpComisionController::class)->group(function(){
        Route::get('/planillas/afp/comision', 'index')->name('planillas.comision');
    });


});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/linkear', function () {
    Artisan::call('storage:link');
});
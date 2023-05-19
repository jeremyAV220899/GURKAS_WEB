<?php

use App\Http\Controllers\Administrador\ServiciosController;
use App\Http\Controllers\RRHH\Personal\PersonalesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ServiciosController::class)->group(function () {
    Route::get('/servicios/rrhh/getSedes/{id}', 'getSedesByUnidad');
    Route::get('/servicios/centrocontrol/getSedes/{id}', 'getSedesByUnidad');
    Route::get('/servicios/administrador/getAdministradorEstado/{id}', 'getEstadosByPersonal');
    Route::get('/servicios/administrador/getAdministradorEmpresa/{id}', 'getEmpresasByUnidad');
});

Route::controller(PersonalesController::class)->group(function(){
    Route::get('/personal/contador', 'contador');
    Route::get('/personal/contador/activo', 'contadorActivo');
    Route::get('/personal/contador/baja', 'contadorBaja');
});
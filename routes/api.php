<?php

use App\Http\Controllers\Administrador\ServiciosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ServiciosController::class)->group(function () {
    Route::get('/servicios/rrhh/getSedes/{id}', 'getSedesByUnidad');
    Route::get('/servicios/centrocontrol/getSedes/{id}', 'getSedesByUnidad');
    Route::get('/servicios/administrador/getAdministradorEstado/{id}', 'getEstadosByPersonal');
});

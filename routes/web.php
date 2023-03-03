<?php

use App\Http\Controllers\RRHH\Personal\PersonalesController as DatosPersonalesController;
use App\Http\Controllers\RRHH\Personal\FamiliaresController as DatosFamiliaresController;
use App\Http\Controllers\RRHH\Personal\LaboralesController as DatosLaboralesController;
use App\Http\Controllers\RRHH\Reportes\Personal\C4Controller as ReportePersonalC4Controller;
use App\Http\Controllers\RRHH\Reportes\Personal\EstadoController as ReportePersonalEstadoController;
use App\Http\Controllers\RRHH\Reportes\Asistencia\PersonalController as ReporteAsistenciaPersonalController;
use App\Http\Controllers\RRHH\Reportes\Asistencia\UnidadController as ReporteAsistenciaUnidadController;
use App\Http\Controllers\RRHH\Reportes\Asistencia\SedeController as ReporteAsistenciaSedeController;
use App\Http\Controllers\RRHH\BusquedaPersonal\UnidadController as BusquedaUnidadController;
use App\Http\Controllers\RRHH\BusquedaPersonal\SedeController as BusquedaSedeController;
use App\Http\Controllers\RRHH\BusquedaPersonal\EmpresaController as BusquedaEmpresaController;
use App\Http\Controllers\RRHH\BusquedaPersonal\EdadController as BusquedaEdadController;
use App\Http\Controllers\RRHH\BusquedaPersonal\EstaturaController as BusquedaEstaturaController;
use App\Http\Controllers\RRHH\BusquedaPersonal\TurnoController as BusquedaTurnoController;
use App\Http\Controllers\RRHH\BusquedaPersonal\DniController as BusquedaDniController;
use App\Http\Controllers\RRHH\BusquedaPersonal\IngresoController as BusquedaIngresoController;
use App\Http\Controllers\Comercial\Unidad\UnidadController as ComercialUnidadController;
use App\Http\Controllers\Comercial\Sede\SedeController as ComercialSedeController;
use App\Http\Controllers\Planilla\AFP\ComisionController as AfpComisionController;
use App\Http\Controllers\Planilla\Personal\LaboralesController as AfpPersonalLaboralesController;
use App\Http\Controllers\Administrador\SistemaController as AdminSistemaController;
use App\Http\Controllers\Administrador\TallaController as AdminTallaController;
use App\Http\Controllers\Administrador\PuestoController as AdminPuestoController;
use App\Http\Controllers\Administrador\GeneroController as AdminGeneroController;
use App\Http\Controllers\Administrador\DocumentoController as AdminDocumentoController;
use App\Http\Controllers\Administrador\BreveteController as AdminBreveteController;
use App\Http\Controllers\Administrador\NacionalidadController as AdminNacionalidadController;
use App\Http\Controllers\Administrador\HoraController as AdminHoraController;
use App\Http\Controllers\Administrador\SituacionController as AdminSituacionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'index']);
Auth::routes();

Route::middleware(['auth'])->group(function () {
    /* ------------------ RECURSOS HUMANOS ------------------ */
    /* ----- PERSONAL ----- */
    Route::controller(DatosPersonalesController::class)->group(function () {
        Route::get('/rrhh/personal/index', 'index')->name('personal.index');
    });
    Route::controller(DatosFamiliaresController::class)->group(function () {
        Route::get('/rrhh/personal/familiares', 'index')->name('personal.familiares');
    });
    Route::controller(DatosLaboralesController::class)->group(function () {
        Route::get('/rrhh/personal/laborales', 'index')->name('personal.laborales');
    });

    /* ----- REPORTES ----- */
    Route::controller(ReportePersonalC4Controller::class)->group(function () {
        Route::get('/rrhh/reportes/personal/C4', 'index')->name('reportes.c4');
    });
    Route::controller(ReportePersonalEstadoController::class)->group(function () {
        Route::get('/rrhh/reportes/personal/estado', 'index')->name('reportes.estado');
    });
    Route::controller(ReporteAsistenciaPersonalController::class)->group(function () {
        Route::get('/rrhh/reportes/asistencia/personal', 'index')->name('reportes.asistencia-personal');
    });
    Route::controller(ReporteAsistenciaUnidadController::class)->group(function () {
        Route::get('/rrhh/reportes/asistencia/unidad', 'index')->name('reportes.asistencia-unidad');
    });
    Route::controller(ReporteAsistenciaSedeController::class)->group(function () {
        Route::get('/rrhh/reportes/asistencia/sede', 'index')->name('reportes.asistencia-sede');
    });
    
    /* ----- BUSQUEDA PERSONAL ----- */
    Route::controller(BusquedaUnidadController::class)->group(function () {
        Route::get('/rrhh/busqueda/unidad', 'index')->name('busqueda.unidad');
    });
    Route::controller(BusquedaSedeController::class)->group(function () {
        Route::get('/rrhh/busqueda/sede', 'index')->name('busqueda.sede');
    });
    Route::controller(BusquedaEmpresaController::class)->group(function () {
        Route::get('/rrhh/busqueda/empresa', 'index')->name('busqueda.empresa');
    });
    Route::controller(BusquedaEdadController::class)->group(function () {
        Route::get('/rrhh/busqueda/edad', 'index')->name('busqueda.edad');
    });
    Route::controller(BusquedaEstaturaController::class)->group(function () {
        Route::get('/rrhh/busqueda/estatura', 'index')->name('busqueda.estatura');
    });
    Route::controller(BusquedaTurnoController::class)->group(function () {
        Route::get('/rrhh/busqueda/turno', 'index')->name('busqueda.turno');
    });
    Route::controller(BusquedaDniController::class)->group(function () {
        Route::get('/rrhh/busqueda/dni', 'index')->name('busqueda.dni');
    });
    Route::controller(BusquedaIngresoController::class)->group(function () {
        Route::get('/rrhh/busqueda/ingreso', 'index')->name('busqueda.ingreso');
    });

    /* ------------------ COMERCIAL ------------------ */
    /* ----- UNIDAD ----- */
    Route::controller(ComercialUnidadController::class)->group(function () {
        Route::get('/comercial/unidad', 'index')->name('comercial.unidad');
    });
    /* ----- SEDE ----- */
    Route::controller(ComercialSedeController::class)->group(function () {
        Route::get('/comercial/sede', 'index')->name('comercial.sede');
    });

    /* ------------------ PLANILLA ------------------ */
    /* ----- PERSONAL ----- */
    Route::controller(AfpPersonalLaboralesController::class)->group(function () {
        Route::get('/planilla/personal/datos', 'index')->name('planillas.datos');
    });
    /* ----- AFP ----- */
    Route::controller(AfpComisionController::class)->group(function () {
        Route::get('/planilla/afp/comision', 'index')->name('planillas.comision');
    });
    
    Route::controller(UsuarioController::class)->group(function () {
        Route::get('/usuario/perfil', 'perfil')->name('usuario.perfil');
    });

    Route::controller(AdminSistemaController::class)->group(function () {
        Route::get('/administrador/sistemas/ubigeo', 'index')->name('administrador.sistemas.ubigeo');
        Route::post('/administrador/sistemas/ubigeo/departamentocarga', 'departamentoImportExcel')->name('carga.departamento');
        Route::post('/administrador/sistemas/ubigeo/provinciacarga', 'provinciaImportExcel')->name('carga.provincia');
        Route::post('/administrador/sistemas/ubigeo/distritocarga', 'distritoImportExcel')->name('carga.distrito');
        Route::get('/servicios/ubigeo/departamento', 'listaDepartamentos');
        Route::get('/servicios/ubigeo/provincia/{departamento}', 'listaProvincias');
        Route::get('/servicios/ubigeo/distrito/{provincia}', 'listaDistritos');
    });
    Route::controller(AdminTallaController::class)->group(function () {
        Route::get('/administrador/sistemas/tallas', 'index')->name('administrador.sistemas.talla');
        Route::post('/administrador/sistemas/tallas/guardar', 'store')->name('talla.store');
        Route::get('/administrador/sistemas/tallas/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/tallas/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/tallas/borrar/{id}', 'delete');
    });
    Route::controller(AdminPuestoController::class)->group(function () {
        Route::get('/administrador/sistemas/puestos', 'index')->name('administrador.sistemas.puesto');
        Route::post('/administrador/sistemas/puestos/guardar', 'store')->name('puesto.store');
        Route::get('/administrador/sistemas/puestos/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/puestos/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/puestos/borrar/{id}', 'delete');
    });
    Route::controller(AdminGeneroController::class)->group(function () {
        Route::get('/administrador/sistemas/generos', 'index')->name('administrador.sistemas.genero');
        Route::post('/administrador/sistemas/generos/guardar', 'store')->name('genero.store');
        Route::get('/administrador/sistemas/generos/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/generos/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/generos/borrar/{id}', 'delete');
    });
    Route::controller(AdminDocumentoController::class)->group(function () {
        Route::get('/administrador/sistemas/documentos', 'index')->name('administrador.sistemas.documento');
        Route::post('/administrador/sistemas/documentos/guardar', 'store')->name('documento.store');
        Route::get('/administrador/sistemas/documentos/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/documentos/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/documentos/borrar/{id}', 'delete');
    });
    Route::controller(AdminBreveteController::class)->group(function () {
        Route::get('/administrador/sistemas/brevetes', 'index')->name('administrador.sistemas.brevete');
        Route::post('/administrador/sistemas/brevetes/guardar', 'store')->name('brevete.store');
        Route::get('/administrador/sistemas/brevetes/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/brevetes/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/brevetes/borrar/{id}', 'delete');
    });
    Route::controller(AdminNacionalidadController::class)->group(function () {
        Route::get('/administrador/sistemas/nacionalidades', 'index')->name('administrador.sistemas.nacionalidad');
        Route::post('/administrador/sistemas/nacionalidades/guardar', 'store')->name('nacionalidad.store');
        Route::get('/administrador/sistemas/nacionalidades/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/nacionalidades/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/nacionalidades/borrar/{id}', 'delete');
    });
    Route::controller(AdminHoraController::class)->group(function () {
        Route::get('/administrador/sistemas/horas', 'index')->name('administrador.sistemas.hora');
        Route::post('/administrador/sistemas/horas/guardar', 'store')->name('hora.store');
        Route::get('/administrador/sistemas/horas/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/horas/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/horas/borrar/{id}', 'delete');
    });
    Route::controller(AdminSituacionController::class)->group(function () {
        Route::get('/administrador/sistemas/situaciones', 'index')->name('administrador.sistemas.situacion');
        Route::post('/administrador/sistemas/situaciones/guardar', 'store')->name('situacion.store');
        Route::get('/administrador/sistemas/situaciones/editar/{id}', 'edit');
        Route::post('/administrador/sistemas/situaciones/actualizar/{id}', 'update');
        Route::get('/administrador/sistemas/situaciones/borrar/{id}', 'delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/linkear', function () {
    Artisan::call('storage:link');
});

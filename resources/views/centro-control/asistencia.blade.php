@extends('layouts.apps')
@section('content')
    <!-- modal renganche -->
    <div class="modal fade" id="renganche" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Renganche de Personal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Personal de Renganche</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Personal</label>
                                        <select id="personal_id" name="personal_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <!-- modal tardanza -->
    <div class="modal fade" id="tardanza" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tardanza de Personal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Tardanza de Renganche</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Personal</label>
                                        <select id="personal_id" name="personal_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->


    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Centro Control</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tareo de Personal</li>
                </ol>
            </nav>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Personal</h6>
    <hr>
    <div class="card">
        <div class="card-body row g-3">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Asistencia</h5>
            </div>
            <hr />
            <div class="col-4">
                <label class="form-label">Turno</label>
                <select class="form-select" id="turno_id" name="turno_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                    @foreach ($turnos as $turno)
                        <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Unidad</label>
                <select class="single-select" id="unidad_id" name="unidad_id">
                    <option value="" selected>--- Seleccionar ---</option>
                    @foreach ($unidades as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Sede</label>
                <select class="single-select" id="sede_id" name="sede_id">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>            
            <div class="col-4">
                <label class="form-label">Empresa</label>
                <select class="form-select" id="empresa_id" name="empresa_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Fecha</label>
                <input id="fecha_id" name="fecha_id" type="date"
                                            class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Horas Trabajadas</label>
                <select class="form-select" id="horas_id" name="horas_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>

            <div class="ms-auto">
                <button type="button" class="btn btn-success btnCrearSede">Buscar</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#renganche">Renganche</button>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                data-bs-target="#tardanza">Tardanza</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body row g-3">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Buscar Código AVP</h5>
            </div>
            <hr />
            <div class="col-6">
                <label class="form-label">Empleado</label>
                <select class="form-select" id="empleado_id" name="empleado_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>          
            <div class="col-6">
                <label class="form-label">Código AVP</label>
                <input id="codigoAvp" name="codigoAvp" type="text"
                                            class="form-control" readonly>
            </div>

            <div class="ms-auto">
                <button type="button" class="btn btn-success btnCrearSede">Buscar AVP</button>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Empleados</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="bi bi-person-check-fill"></i></div>
                    <input class="form-control ps-5" type="date" id="fechaActual" readonly>
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Cód. Empleado</th>
                            <th>Empleado</th>
                            <th>Marcaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>AVP12345678</td>
                            <td>Thomas Hardy</td>
                            <td>
                                <select class="form-select" id="#" name="#" aria-label="Default select example">
                                    <option value="" selected>--- SELECCIONAR ---</option>
									<option value="1">Asistio</option>
									<option value="2">Baja</option>
									<option value="3">Descanso</option>
									<option value="4">Descanso Médico</option>
									<option value="5">Descanso Trabajado</option>
									<option value="6">Falta</option>
									<option value="7">Feriado</option>
									<option value="8">Licencia</option>
									<option value="9">Permiso</option>
									<option value="10">Suspención</option>
									<option value="11">Vacaciones</option>
								</select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="/js/core/function.js"></script>
    <script src="/js/gurkas/centrocontrol/tareo.js"></script>
    <script type="text/javascript"></script>
@endsection

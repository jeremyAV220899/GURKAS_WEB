@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buscar Personal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Personal Asignado</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="{{ route('sede.store') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select id="cod_unidad" name="cod_unidad" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>

                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sede</label>
                                        <select id="cod_unidad" name="cod_unidad" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>

                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Turno</label>
                                        <select id="cod_unidad" name="cod_unidad" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>

                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Empresa</label>
                                        <select id="cod_unidad" name="cod_unidad" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Buscar Personal</button>
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
    <h6 class="mb-0 text-uppercase">Lita de Personal</h6>
    <hr>
    <div class="card">
        <div class="card-body row g-3">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Buscar Personal</h5>
            </div>
            <hr />
            <div class="col-6">
                <label class="form-label">Unidad</label>
                <select class="single-select" id="unidad_id" name="unidad_id">
                    <option value="" selected>--- Seleccionar ---</option>
                    @foreach ($unidades as $unidad)
                        <option value="{{ $unidad->id }}">{{ $unidad->razon_social }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label class="form-label">Sede</label>
                <select class="single-select" id="sede_id" name="sede_id">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>

            <div class="col-6">
                <label class="form-label">Turno</label>
                <select class="form-select" id="turno_id" name="turno_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                    @foreach ($turnos as $turno)
                        <option value="{{ $turno->id }}">{{ $turno->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label class="form-label">Empresa</label>
                <select class="form-select" id="empresa_id" name="empresa_id" aria-label="Default select example">
                    <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="btn-group col-2">
                <button type="button" class="btn btn-primary btnCrearSede" data-bs-toggle="modal"
                    data-bs-target="#registrar">Buscar Personal</button>
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
                            <th>Foto</th>
                            <th>Empleado</th>
                            <th>DNI</th>
                            <th>Marcaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>AVP12345678</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                    <img src="https://via.placeholder.com/110X110" class="rounded-circle" width="44"
                                        height="44" alt="">
                                </div>
                            </td>
                            <td>Thomas Hardy</td>
                            <td>12364578</td>
                            <td>
                                <select class="mi-select">
                                    <option value="1">ASISTENCIA</option>
                                    <option value="2">FALTA</option>
                                    <option value="3">DESCANSO</option>
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

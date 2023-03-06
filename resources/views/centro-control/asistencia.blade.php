@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Sede</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos De la Sede</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST"  action="{{ route('sede.store') }}">
                                    @csrf
                                    <div class="col-6">
                                        <label class="form-label">Código Sede</label>
                                        <input id="cod_sede" name="cod_sede" type="text" class="form-control" >
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Nombre Sede</label>
                                        <input id="nombre_sede" name="nombre_sede" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado</label>
                                        <select id="estado_id" name="estado_id" class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento" name="departamento" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" name="provincia" aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" name="distrito" aria-label="Default select example">
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <textarea id="direccion" name="direccion"  class="form-control" rows="2" cols="4"></textarea>
                                    </div>
                                    
                                    <div class="col-6">
                                        <label class="form-label">Fech. Activación</label>
                                        <input id="fecha_activacion" name="fecha_activacion" type="date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fech. Baja</label>
                                        <input id="fecha_baja" name="fecha_baja" type="date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Latitud</label>
                                        <input id="latitud" name="latitud" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Longitud</label>
                                        <input id="longitud" name="longitud" type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Representante</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Contacto</label>
                                        <input id="contacto" name="contacto" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Correo</label>
                                        <input id="correo" name="correo" type="email" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Celular</label>
                                        <input id="celular" name="celular" type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Centro de Costo</label>
                                        <input id="centro_costo" name="centro_costo"  type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Unidad Asignada</h6>
                                    <hr />
                                    <div class="col-12">
                                        <label class="form-label">Unidad</label>
                                        <select  id="cod_unidad" name="cod_unidad" class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>

                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerra</button>
                                        <button type="submit" class="btn btn-primary btnRegistrar">Registrar</button>
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
        <div class="breadcrumb-title pe-3">Comercial</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Sede</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearSede" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lita de Sedes</h6>
    <hr>
    <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
             <h5 class="mb-0">Customer Details</h5>
              <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                <input class="form-control ps-5" type="text" placeholder="search">
              </form>
          </div>
          <div class="table-responsive mt-3">
            <table class="table align-middle">
              <thead class="table-secondary">
                <tr>
                 <th>#</th>
                 <th>Name</th>
                 <th>Address</th>
                 <th>City</th>
                 <th>Pin Code</th>
                 <th>Country</th>
                 <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 <td>1</td>
                  <td>
                    <div class="d-flex align-items-center gap-3 cursor-pointer">
                       <img src="https://via.placeholder.com/110X110" class="rounded-circle" width="44" height="44" alt="">
                       <div class="">
                         <p class="mb-0">Thomas Hardy</p>
                       </div>
                    </div>
                  </td>
                  <td>89 Chicago UK</td>
                  <td>Chicago</td>
                  <td>8574201</td>
                  <td>United Kingdom</td>
                  <td>
                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Asistencia"><i class="bi bi-check2-circle"></i></a>
                      <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Asistencia Especial"><i class="bi bi-pencil-fill"></i></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Falta"><i class="bi bi-person-x-fill"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection

@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Datos Laborales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Laborales</h6>
                                <hr/>
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label class="form-label">Código Empleado</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Tipo Trabajador</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sueldo Basico</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Suledo Bruto</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Asignacion Familiar</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Pago</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos del Banco</h6>
                                    <hr/>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Moneda</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Banco Sueldo</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Cta. Bancaria</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos de Banco CTS</h6>
                                    <hr/>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Moneda CTS</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Banco CTS</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Cta. Bancaria CTS</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Regimen Pensionario</h6>
                                    <hr/>
                                    <div class="col-6">
                                        <label class="form-label">Regimen Pensionario</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">AFP / ONP</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">AFP CUSPP</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo de Comisión</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Movimiento AFP</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Bonos Empleado</h6>
                                    <hr/>
                                    <div class="col-6">
                                        <label class="form-label">Bono Armado</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Bono Nocturno</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Bono Alimentacion</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Bono Movilidad</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Bonificacion</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Bono Feriado</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END modal -->

    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Planillas</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Datos Laborales</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">REGISTRO DE DATOS Laborales</h6>
    <hr>

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
                <label class="form-label">.</label>
                <button type="button" class="btn btn-success form-control btnCrearSede">Buscar</button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
          <div class="border p-3 rounded">
          <h6 class="mb-0 text-uppercase">Datos Laborales</h6>
           <hr/>
          <form class="row g-3">
            <div class="col-4">
              <label class="form-label">Fecha inicio de Contrato</label>
              <input type="date" class="form-control">
            </div>
            <div class="col-4">
              <label class="form-label">Tipo Trabajador</label>
              <select class="form-select" id="empleado_id" name="empleado_id" aria-label="Default select example">
                <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
              <label class="form-label">Sueldo Basico</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-4">
              <label class="form-label">Sueldo Bruto</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Asignación Familiar</label>
                <select class="form-select" id="asignacion_id" name="asignacion_id" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Tipo Pago</label>
                <select class="form-select" id="tipo_pago" name="tipo_pago" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Prioridad Remuneración</label>
                <select class="form-select" id="remuneracion" name="remuneracion" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Bono Armado</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Bonificación</label>
                <input type="text" class="form-control">
            </div>
            <h6 class="mb-0 text-uppercase">Datos del Banco</h6>
            <hr/>
            <div class="col-4">
                <label class="form-label">Banco Sueldo</label>
                <select class="form-select" id="banco" name="banco" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Cta. Bancaria</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Tipo Moneda</label>
                <select class="form-select" id="moneda" name="moneda" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Banco CTS</label>
                <select class="form-select" id="bancoCTS" name="bancoCTS" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Cta. CTS</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Tipo Moneda</label>
                <select class="form-select" id="tipoMoneda" name="tipoMoneda" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <h6 class="mb-0 text-uppercase">Datos Regimen Pensionario</h6>
            <hr/>
            <div class="col-4">
                <label class="form-label">Regimen Pensionario</label>
                <select class="form-select" id="regimenPensionario" name="regimenPensionario" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">AFP / ONP</label>
                <select class="form-select" id="afp" name="afp" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">AFP CUSPP</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-6">
                <label class="form-label">Tipo Comision</label>
                <select class="form-select" id="tipoComision" name="tipoComision" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-6">
                <label class="form-label">Movimiento AFP</label>
                <select class="form-select" id="movimiento" name="movimiento" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <h6 class="mb-0 text-uppercase">Bonos</h6>
            <hr/>
            <div class="col-3">
                <label class="form-label">Movilidad</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-3">
                <label class="form-label">Bono Feriado</label>
                <select class="form-select" id="bonoFeriado" name="bonoFeriado" aria-label="Default select example">
                  <option value="" selected>--- Seleccionar ---</option>
                </select>
            </div>
            <div class="col-3">
                <label class="form-label">Alimentación</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-3">
                <label class="form-label">Bono Nocturno</label>
                <input type="text" class="form-control">
            </div>            
            <div class="col-12">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
@endsection

@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Datos Laborales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h6 class="mb-0 text-uppercase">Detalle Contrato</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Unidad</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Sede</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="P">Peruana</option>
                                            <option value="E">Extranjera</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos de Banco</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Tipo Moneda</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="1">Soles</option>
                                            <option value="2">Dólares</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Banco Sueldo</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($bancos as $banco)
                                                <option value="{{ $banco->id }}">{{ $banco->codigo }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Cta. Bancaria</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Regimen Pensionario</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Regimen Pensionario</label>
                                        <select class="form-select" aria-label="Default select example" name="pensionario" id="pensionario">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            @foreach ($pensionarios as $pensionario)
                                                <option value="{{ $pensionario->id }}">{{ $pensionario->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">AFP / ONP</label>
                                        <select class="form-select" aria-label="Default select example" name="afp" id="afp">
                                            <option value="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">AFP CUSPP</label>
                                        <input type="text" class="form-control" id="afpcuspp" name="afpcuspp" value="">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo de Comisión</label>
                                        <select class="form-select" aria-label="Default select example" name="comision" id="comision">
                                            <option value="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Movimiento AFP</label>
                                        <select class="form-select" aria-label="Default select example" name="movimiento" id="movimiento">
                                            <option value="">--- Seleccionar ---</option>
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Laborales</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Tipo Trabajador</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="1">Ejecutivo</option>
                                            <option value="2">Empleado</option>
                                            <option value="3">Obrero</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Sueldo Básico</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Sueldo Bruto</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Asignación Familiar</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="" selected>--- Seleccionar ---</option>
                                            <option value="1">No</option>
                                            <option value="2">Si</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Tipo Pago</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">--- Seleccionar ---</option>
                                            <option value="1" selected>Depósito en Cuenta</option>
                                            <option value="2">Efectivo</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Periodidad de la Remuneración</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">--- Seleccionar ---</option>
                                            <option value="1">Mensual</option>
                                            <option value="2" selected>Quincenal</option>
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
        <div class="breadcrumb-title pe-3">Recursos Humanos</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Personal</li>
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
    <h6 class="mb-0 text-uppercase">LISTA DE DATOS Laborales</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable" role="grid"
                                aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 100.641px;">
                                            Cód. Empleado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 200.094px;">Nombres</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">Apellido Paterno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Apellido Materno</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">AVP71269685</td>
                                        <td>Juan Manuel</td>
                                        <td>Ubillus</td>
                                        <td>Rivera</td>
                                        <td>
                                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Views" aria-label="Views"><i
                                                        class="bi bi-eye-fill"></i></a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit" aria-label="Edit"><i
                                                        class="bi bi-pencil-fill"></i></a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Delete" aria-label="Delete"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

<script lenguaje="javascript">
    $("#pensionario").on('change', function () {
        let elegido=$(this).val();
        if (elegido != ""){
            $.get('/pensiones/'+elegido, function(data){
                console.log(data)
                if(data.estado){
                    $("#afp").html(data.afp).prop('disabled', true);
                    $("#comision").html(data.comision).prop('disabled', true);
                    $("#movimiento").html(data.movimiento).prop('disabled', true);
                    $("#afpcuspp").val(data.afpcuspp).prop('disabled', true);
                }else{
                    $("#afp").html(data.afp).prop('disabled', false);
                    $("#comision").html(data.comision).prop('disabled', false);
                    $("#movimiento").html(data.movimiento).prop('disabled', false);
                    $("#afpcuspp").val(data.afpcuspp).prop('disabled', false);
                }
            });
        }else{
            $('#afp').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
            $('#afpcuspp').val('').prop('disabled', true);
            $('#comision').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
            $('#movimiento').html('<option value="">--- Seleccionar ---</option>').prop('disabled', true);
        }
    })



    /*$("#pensionario").on('change', function () {
        $("#pensionario option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/comisiones/'+elegido, function(data){
                $("#comision").html(data);
            });
        });
    });

    $("#pensionario").on('change', function () {
        $("#pensionario option:selected").each(function () {
            let elegido=$(this).val();
            $.get('/movimientos/'+elegido, function(data){
                $("#movimiento").html(data);
            });
        });
    });*/
</script>
@endsection
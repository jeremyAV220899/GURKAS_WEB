@extends('layouts.apps')
@section('content')
    <!-- modal -->
    <div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Calzado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Del Producto</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="">
                                    @csrf
                                    <div class="col-2">
                                        <label class="form-label">Cod. Calzado</label>
                                        <input id="codCalzado" name="codCalzado" type="text" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Talla</label>
                                        <select id="talla" name="talla" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Color</label>
                                        <input id="color" name="color" type="text" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Descripción</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control" rows="2" cols="4"></textarea>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo Calzado</label>
                                        <select id="tipoCalzado" name="tipoCalzado" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Estado</label>
                                        <select id="estado" name="estado" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Costo Unitario</label>
                                        <input id="costo" name="costo" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Stock Inicial</label>
                                        <input id="stockInicial" name="stockInicial" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Stock Actual</label>
                                        <input id="stockActual" name="stockActual" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Stock Minimo</label>
                                        <input id="stockMinimo" name="stockMinimo" type="text"
                                            class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">N° Cuota</label>
                                        <select id="cuota" name="cuota" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Descuento Empleado</label>
                                        <input id="stockMinimo" name="stockMinimo" type="text"
                                            class="form-control">
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Adicionales</h6>
                                    <hr />
                                    <div class="col-6">
                                        <label class="form-label">Fecha Adquisición</label>
                                        <input id="fechaAdquisicion" name="fechaAdquisicion" type="date"
                                            class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Fecha Registro</label>
                                        <input id="fechaRegistro" name="fechaRegistro" type="date"
                                            class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Observacion</label>
                                        <textarea id="observacion" name="observacion" class="form-control" rows="2" cols="4"></textarea>
                                    </div>                             
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
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

    <!-- modal -->
    <div class="modal fade" id="visualizar" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ver Proveedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Datos Del Proveedor</h6>
                                <hr />
                                <form id="formulario" class="row g-3" method="POST" action="">
                                    @csrf
                                    <div class="col-3">
                                        <label class="form-label">Proveedor</label>
                                        <input id="proveedor" name="proveedor" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Ruc</label>
                                        <input id="ruc" name="ruc" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Rubro</label>
                                        <input id="rubro" name="rubro" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Contacto del Proveedor</label>
                                        <input id="contacto" name="contacto" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Dirección</label>
                                        <input id="direccion" name="direccion" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Departamento</label>
                                        <select class="form-select" id="departamento" name="departamento"
                                            aria-label="Default select example" disabled>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Provincia</label>
                                        <select class="form-select" id="provincia" name="provincia"
                                            aria-label="Default select example" disabled>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Distrito</label>
                                        <select class="form-select" id="distrito" name="distrito"
                                            aria-label="Default select example" disabled>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Página Web</label>
                                        <input type="text" id="pagina" name="pagina" class="form-control" readonly></input>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Tipo Proveedor</label>
                                        <select id="TipoProveedor" name="TipoProveedor" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha de Registro</label>
                                        <input type="date" id="fechaRegistro" name="fechaRegistro" class="form-control" readonly></input>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Observación</label>
                                        <textarea id="observacion" name="observacion" class="form-control" rows="2" cols="4" readonly></textarea>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Telefono 1</label>
                                        <input id="telefono1" name="telefono1" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Telefono 2</label>
                                        <input id="telefono2" name="telefono2" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Telefono 3</label>
                                        <input id="telefono3" name="telefono3" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Celular 1</label>
                                        <input id="celular1" name="celular1" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Celular 2</label>
                                        <input id="celular2" name="celular2" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Celular 3</label>
                                        <input id="celular3" name="celular3" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Correo 1</label>
                                        <input id="correo1" name="correo1" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Correo 2</label>
                                        <input id="correo2" name="correo2" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Correo 3</label>
                                        <input id="correo3" name="correo3" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    
                                    <h6 class="mb-0 text-uppercase">Representante</h6>
                                    <hr />
                                    <div class="col-3">
                                        <label class="form-label">Representante Legal</label>
                                        <input id="represetante_legal" name="represetante_legal" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Tipo Doc. Ident.</label>
                                        <select id="TipoDoctIdent" name="TipoDoctIdent" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Num Doc. Ident.</label>
                                        <input id="NumDoctIdent" name="NumDoctIdent" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Cargo</label>
                                        <input id="cargo_repre_leg" name="cargo_repre_leg" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Empresa</label>
                                        <input id="empresa" name="empresa" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Tipo  Empresa</label>
                                        <select id="TipoEmpresa" name="TipoEmpresa" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Estado</label>
                                        <select id="estado" name="estado" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <h6 class="mb-0 text-uppercase">Datos Certificación</h6>
                                    <hr />
                                    <div class="col-4">
                                        <label class="form-label">Certificado BASC</label>
                                        <select id="certificadoBASC" name="certificadoBASC" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Otro Certificado</label>
                                        <select id="otroCertificado" name="otroCertificado" class="form-select"
                                            aria-label="Default select example" disabled>
                                            <option selected="">--- Seleccionar ---</option>                                            
                                                <option value="">xfddd</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Autenticidad Certificación</label>
                                        <input id="autenticacion" name="autenticacion" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Número Certificación</label>
                                        <input id="numeroCertificacion" name="numeroCertificacion" type="text"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha Otorgamiento</label>
                                        <input id="fechaOtorgamiento" name="fechaOtorgamiento" type="date"
                                            class="form-control" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Fecha Caducidad</label>
                                        <input id="fechaCaducidad" name="fechaCaducidad" type="date"
                                            class="form-control" readonly>
                                    </div>                                  
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
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
        <div class="breadcrumb-title pe-3">Logística</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Productos</li>
                    <li class="breadcrumb-item active" aria-current="page">Calzado</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary btnCrearUnidad" data-bs-toggle="modal"
                    data-bs-target="#registrar">Registrar Nuevo</button>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">Lista de Calzados</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable tablaUnidad"
                                role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 80.094px;">Cód. Calzado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 100.094px;">Nombre</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 112.406px;">Talla</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Stock</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.8594px;">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 84.0781px;">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                        <tr role="row" class="odd">
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span
                                                    class="badge bg-light- text- w-100"></span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center fs-6">
                                                    <button class="btn text-primary btnVer" type="button"
                                                        data-id="" data-bs-toggle="modal"
                                                        data-bs-target="#visualizar">
                                                        <i class="bi bi-eye-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-warning btnEditar" type="button"
                                                        data-id="" data-bs-toggle="modal"
                                                        data-bs-target="#registrar">
                                                        <i class="bi bi-pencil-fill">
                                                        </i>
                                                    </button>
                                                    <button class="btn text-danger btnBorrar" title="Eliminar"
                                                        type="button" data-id="">
                                                        <i class="bi bi-trash-fill">
                                                        </i>
                                                    </button>
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
    <script src="/js/core/function.js"></script>
    <script src="/js/gurkas/comercial/unidad.js"></script>
@endsection

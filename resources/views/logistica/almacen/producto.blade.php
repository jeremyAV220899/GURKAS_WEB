@extends('layouts.apps')
@section('content')
<!-- modal -->
<div class="modal fade" id="registrar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title titulo"> Registro de Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <div class="border p-3 rounded">
                <h6 class="mb-0 text-uppercase">Datos del Producto</h6>
                <hr />
                <form id="formulario" method="POST" action="{{ route('sede.store') }}">
                @csrf 
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row g-3">
                            <div class="col-12 col-lg-8">
                              <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <label class="form-label">Cod Producto</label>
                                            <input type="text" class="form-control" placeholder="Cod Producto">
                                          </div>
                                    <div class="col-8">
                                      <label class="form-label">Nombre del Producto</label>
                                      <input type="text" class="form-control" placeholder="Ingrese el Nombre del Producto">
                                    </div>
                                    <div class="col-4">
                                      <label class="form-label">N° de Serie</label>
                                      <input type="text" class="form-control" placeholder="Ingrese el N° de Serie">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Marca</label>
                                        <input type="text" class="form-control" placeholder="Ingrese la Marca">
                                      </div>
                                      <div class="col-4">
                                          <label class="form-label">Modelo</label>
                                          <input type="text" class="form-control" placeholder="Ingrese el Modelo">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Costo Unitario</label>
                                        <input type="text" class="form-control" placeholder="Costo Unitario">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Tipo de Moneda</label>
                                        <select class="form-select">
                                          <option>Soles</option>
                                          <option>Dolar</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">Color</label>
                                        <select class="form-select">
                                          <option>Negro</option>
                                          <option>Azul</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">Talla</label>
                                        <select class="form-select">
                                          <option>s</option>
                                          <option>m</option>
                                          <option>xl</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">Tipo de Tela</label>
                                        <select class="form-select">
                                          <option>Drill</option>
                                          <option>De Vestir</option>
                                          <option>JEAN</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">Tipo de Calzado</label>
                                        <select class="form-select">
                                          <option>borcegui</option>
                                          <option>Zapato de Cuero</option>
                                          <option>BOTIN</option>
                                          <option>MOCASINE DAMA</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">N° de Cuota</label>
                                        <select class="form-select">
                                          <option>Directo</option>
                                          <option>1 cuota</option>
                                          <option>2 cuota</option>
                                          <option>3 cuota</option>
                                          <option>4 cuota</option>
                                        </select>
                                      </div>
                                      <div class="col-4">
                                        <label class="form-label">Descuento Empleado</label>
                                        <input type="text" class="form-control" placeholder="Ingrese el Monto">
                                    </div>
                                    <div class="col-4">
                                      <label class="form-label">Stock Inical</label>
                                      <input type="text" class="form-control" placeholder="ingrese el Stock Inical">
                                    </div>
                                    <div class="col-4">
                                      <label class="form-label">Stock Actual</label>
                                      <input type="text" class="form-control" placeholder="ingrese el Stock Actual">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Stock Minimo</label>
                                        <input type="text" class="form-control" placeholder="ingrese el Stock Minimo">
                                    </div>


                                    <div class="col-12">
                                      <label class="form-label">Descripción del producto :</label>
                                      <textarea class="form-control" placeholder="Descripción del producto" rows="4" cols="4"></textarea>
                                    </div>
                                </div>

                                </div>
                              </div>
                              <div class="col-12 col-lg-12">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <label class="form-label">N° Tarjeta de Propiedad :</label>
                                                <input type="text" class="form-control" placeholder="ingrese el N° de Tarjeta de Propiedad">
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label">Fecha de Inicio :</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-4">
                                                <label class="form-label">Fecha de vencimiento :</label>
                                                <input type="date" class="form-control">
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">N° Placa :</label>
                                                <input type="text" class="form-control" placeholder="ingrese el N° de placa">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Año de Fabricacion :</label>
                                                <input type="text" class="form-control" placeholder="ingrese el Año de Fabricacion ">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Tipo de Combustible</label>
                                                <select class="form-select">
                                                  <option>GLP</option>
                                                  <option>G-97</option>
                                                  <option>G-95</option>
                                                  <option>G-90</option>
                                                  <option>G-84</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Categoria de Vehiculo</label>
                                                <select class="form-select">
                                                  <option>Automóvil</option>
                                                  <option>Moto</option>
                                                  <option>4x4</option>
                                                  <option>Camioneta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-12 col-lg-4">
                              <div class="card shadow-none bg-light border">
                                <div class="card-body">
                                  <div class="row g-3">
                                    <div class="col-12">
                                        <h5>Categoria</h5>
                                        <div class="category-list">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Tecnologia">
                                            <label class="form-check-label" for="Tecnologia"> Tecnologia </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Uniforme">
                                            <label class="form-check-label" for="Uniforme"> Uniforme </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="UtilesEscritorio">
                                            <label class="form-check-label" for="UtilesEscritorio"> Utiles de Escritorio </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="EquipamientoLogistico">
                                            <label class="form-check-label" for="EquipamientoLogistico"> Equipamiento Logistico </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="EquiposProteccionPersonal">
                                            <label class="form-check-label" for="EquiposProteccionPersonal"> Equipos de Proteccion Personal </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Mobiliario">
                                            <label class="form-check-label" for="Mobiliario"> Mobiliario </label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="Vehiculos">
                                              <label class="form-check-label" for="Vehiculos"> Vehiculos </label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="UtilesAseo">
                                              <label class="form-check-label" for="UtilesAseo"> Utiles de Aseo </label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="Armamento">
                                              <label class="form-check-label" for="Armamento"> Armamento </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Imagen del Producto</label>
                                        <input class="form-control" type="file">
                                      </div>
                                    <div class="col-12">
                                        <label class="form-label">Observacion del producto :</label>
                                        <textarea class="form-control" placeholder="Observacion del producto" rows="8" cols="4"></textarea>
                                      </div>

                                    <div class="col-12">
                                      <label class="form-label">Estado Producto</label>
                                      <select class="form-select">
                                        <option>Nuevo</option>
                                        <option>De Segunda</option>
                                      </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Tipo de Unidad</label>
                                        <select class="form-select">
                                          <option>Unidad(es)</option>
                                          <option>Litro(s)</option>
                                          <option>Metro(s)</option>
                                          <option>Mililitros</option>
                                          <option>Kilogramos</option>
                                          <option>Caja(s)</option>
                                        </select>
                                      </div>
                                      <div class="col-12">
                                        <label class="form-label">Fecha de Compra :</label>
                                        <input type="date" class="form-control">
                                    </div>
                                      <div class="col-12">
                                        <label class="form-label">Fecha de Registro :</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    
                                  </div>
                                  <!--end row-->
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--end row-->
                        </div>
                      </div>
                    </div>
                </div>
                  <!--end row-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Logística</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item">
            <a href="javascript:;">
              <i class="bx bx-home-alt"></i>
            </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Almacén</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
          <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
          <a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="card">
    <div class="card-body">
      <div class="row align-items-center">
        <div class="col-lg-3 col-xl-2">
          <a href="javascript:;" class="btn btn-primary mb-3 mb-lg-0" data-bs-toggle="modal" data-bs-target="#registrar">
            <i class="bi bi-plus-square"></i> Nuevo Producto </a>
        </div>
        <div class="col-lg-9 col-xl-10">
          <form class="float-lg-end">
            <div class="row row-cols-lg-auto g-2">
              <div class="col-12">
                <a href="javascript:;" class="btn btn-light mb-3 mb-lg-0">
                  <i class="bi bi-download"></i>Export </a>
              </div>
              <div class="col-12">
                <a href="javascript:;" class="btn btn-light mb-3 mb-lg-0">
                  <i class="bi bi-upload"></i>Import </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header py-3">
      <div class="row g-3 align-items-center">
        <div class="col-lg-3 col-md-6 me-auto">
          <div class="ms-auto position-relative">
            <div class="position-absolute top-50 translate-middle-y search-icon px-3">
              <i class="bi bi-search"></i>
            </div>
            <input class="form-control ps-5" type="text" placeholder="Buscar Producto">
          </div>
        </div>
        <div class="col-lg-2 col-6 col-md-3">
          <select class="form-select">
            <option>Toda las Categoria</option>
            <option>Tecnologia</option>
            <option>Uniforme</option>
            <option>Utiles Escritorio</option>
            <option>Equipamiento Logistico</option>
            <option>Equipo de Proteccion Personal</option>
            <option>Mobiliario</option>
            <option>Vehiculos</option>
            <option>Utiles de Aseo</option>
            <option>Armamento</option>
          </select>
        </div>
        <div class="col-lg-2 col-6 col-md-3">
          <select class="form-select">
            <option>Último Producto añadido</option>
            <option>Última Semana</option>
            <option>Último Mes</option>
          </select>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="product-grid">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-3">
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">ZAPATO CON PUNTA REFORZADA</h6>
                <p class="product-price fs-6 mb-1">
                  <span>Color NEGRO</span>
                </p>
                <p class="product-price fs-6 mb-1">
                    <span>Talla 41</span>
                </p>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Editar </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Eliminar </a>
               
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <small>65 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                </div>
                <small>96 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                </div>
                <small>65 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                </div>
                <small>35 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <small>74 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <small>42 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                </div>
                <small>24 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-secondary"></i>
                </div>
                <small>55 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border shadow-none mb-0">
              <div class="card-body text-center">
                <img src="https://via.placeholder.com/400X300" class="img-fluid mb-3" alt="" />
                <h6 class="product-title">Men White Polo T-shirt</h6>
                <p class="product-price fs-5 mb-1">
                  <span>$250.99</span>
                </p>
                <div class="rating mb-0">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <small>74 Reviews</small>
                <div class="actions d-flex align-items-center justify-content-center gap-2 mt-3">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-fill"></i> Edit </a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-trash-fill"></i> Delete </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
      <nav class="float-end mt-4" aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
@endsection
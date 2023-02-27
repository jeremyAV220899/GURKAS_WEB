@extends('layouts.apps')
@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center">
  <div class="breadcrumb-title pe-3 text-white">Usuario</div>
  <div class="ps-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 p-0">
        <li class="breadcrumb-item"><a href="/home"><i class="bx bx-home-alt text-white"></i></a>
        </li>
        <li class="breadcrumb-item active text-white" aria-current="page">Perfil</li>
      </ol>
    </nav>
  </div>
</div>
<!--end breadcrumb-->

<div class="profile-cover bg-dark"></div>

<div class="row">
  <div class="col-12 col-lg-8">
    <div class="card shadow-sm border-0">
      <div class="card-body">
          <h5 class="mb-0">Mi Cuenta</h5>
          <hr>
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">Información del Usuario</h6>
            </div>
            <div class="card-body">
              <form class="row g-3">
                 <div class="col-6">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" value="">
                 </div>
                 <div class="col-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" value="">
                </div>
                  <div class="col-6">
                    <label class="form-label">Nombres</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-6">
                    <label class="form-label">Apellidos</label>
                    <input type="text" class="form-control" value="">
                </div>
              </form>
            </div>
          </div>
          <div class="card shadow-none border">
            <div class="card-header">
              <h6 class="mb-0">Información de Contacto</h6>
            </div>
            <div class="card-body">
              <form class="row g-3">
                <div class="col-12">
                  <label class="form-label">Dirección</label>
                  <input type="text" class="form-control" value="47-A, city name, United States">
                 </div>
                 <div class="col-6">
                    <label class="form-label">Ciudad</label>
                    <input type="text" class="form-control" value="">
                 </div>
                 <div class="col-6">
                  <label class="form-label">Distrito</label>
                  <input type="text" class="form-control" value="">
                </div>
                  <div class="col-6">
                    <label class="form-label">Telefono</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-6">
                    <label class="form-label">DNI</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="col-12">
                  <label class="form-label">Sobre Mí</label>
                  <textarea class="form-control" rows="4" cols="4" placeholder="Información que desees compartir"></textarea>
                 </div>
              </form>
            </div>
          </div>
          <div class="text-start">
            <button type="button" class="btn btn-primary px-4">Guardar Cambios</button>
          </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card shadow-sm border-0 overflow-hidden">
      <div class="card-body">
          <div class="profile-avatar text-center">
            <img src="https://via.placeholder.com/110X110" class="rounded-circle shadow" width="120" height="120" alt="">
          </div>
          <div class="d-flex align-items-center justify-content-around mt-5 gap-3">
              <div class="text-center">
                <h4 class="mb-0">45</h4>
                <p class="mb-0 text-secondary">Friends</p>
              </div>
              <div class="text-center">
                <h4 class="mb-0">15</h4>
                <p class="mb-0 text-secondary">Photos</p>
              </div>
              <div class="text-center">
                <h4 class="mb-0">86</h4>
                <p class="mb-0 text-secondary">Comments</p>
              </div>
          </div>
          <div class="text-center mt-4">
            <h4 class="mb-1">{{ Auth::user()->name }}, 27</h4>
            <p class="mb-0 text-secondary">Sydney, Australia</p>
            <div class="mt-4"></div>
            <h6 class="mb-1">HR Manager - Codervent Technology</h6>
            <p class="mb-0 text-secondary">University of Information Technology</p>
          </div>
          <hr>
          <div class="text-start">
            <h5 class="">Sobre Mí</h5>
            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem.
          </div>
      </div>
    </div>
  </div>
</div><!--end row-->

@endsection
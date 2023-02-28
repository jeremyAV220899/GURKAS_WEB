@extends('layouts.apps')
@section('content')
<form action="{{ route('carga.departamento') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control" name="departamento" id="inputGroupFile02">
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
<form action="{{ route('carga.provincia') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control" name="provincia" id="inputGroupFile02">
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
<form action="{{ route('carga.distrito') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control" name="distrito" id="inputGroupFile02">
    <button class="btn btn-primary" type="submit">Guardar</button>
</form>
    
@endsection

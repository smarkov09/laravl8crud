@extends('layouts.plantillabase')

@section('contenido')

<form action="/articulos/{{ $articulo->id }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $articulo->codigo }}">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $articulo->descripcion }}">
  </div>
  <div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $articulo->cantidad }}">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" step="any" value="{{ $articulo->precio }}">
  </div>
    <a class="btn btn-primary btn-sm" href="/articulos" role="button">Cancel</a>
    <button type="submit" class="btn btn-danger btn-sm">Save</button>
</form>

@endsection
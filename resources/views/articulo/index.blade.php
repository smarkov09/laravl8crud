@extends('layouts.plantillabase')

@section('contenido')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="btn btn-primary btn-sm" href="/articulos/create" role="button">Create</a></li>
  </ol>
</nav>
<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Code</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

      @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id }}</td>
            <td>{{ $articulo->codigo }}</td>
            <td>{{ $articulo->descripcion }}</td>
            <td>{{ $articulo->cantidad }}</td>
            <td>{{ $articulo->precio }}</td>
            <td>
                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                    <a class="btn btn-primary btn-sm" href="/articulos/{{ $articulo->id }}/edit" role="button">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
      @endforeach
    
  </tbody>
</table>

@endsection
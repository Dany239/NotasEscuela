@extends('layouts.principal')
@section('hijos')
<h1>Eliminar clase</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/clase/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 
    <div class="mb-3">
    <label for="">IdClase</label>
    <input type="text" name="idclase" id="idclase" value="{{$eliminar->idclase}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion" id="idseccion" value="{{$eliminar->idseccion}}" class="form-control">
    </div>


<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection
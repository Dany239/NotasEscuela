@extends('layouts.principal')
@section('hijos')
<h1>Eliminar seccion</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/seccion/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 
    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion" id="idseccion" value="{{$eliminar->idseccion}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="{{$eliminar->descripcion}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Jornada</label>
    <input type="text" name="jornada" id="jornada" value="{{$eliminar->jornada}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Periodo</label>
    <input type="text" name="periodo" id="periodo" value="{{$eliminar->perido}}" class="form-control">
    </div>

<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection
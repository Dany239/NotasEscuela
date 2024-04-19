@extends('layouts.principal')
@section('hijos')
<h1>Eliminar curso</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/curso/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 
    <div class="mb-3">
    <label for="">IdCurso</label>
    <input type="text" name="idcurso" id="idcurso" value="{{$eliminar->idcurso}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">IdDescripcion</label>
    <input type="text" name="iddescripcion" id="iddescripcion" value="{{$eliminar->iddescripcion}}" class="form-control">
    </div>


<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection
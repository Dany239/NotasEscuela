@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Eliminar empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/alumno/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 
    <div class="mb-3">
    <label for="">Identidad</label>
    <input type="text" name="identidad" id="identidad" value="{{$eliminar->idalumno}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Primer nombre</label>
    <input type="text" name="primernombre" id="primernombre" value="{{$eliminar->primernombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Segundo nombre</label>
    <input type="text" name="segundonombre" id="segundonombre" value="{{$eliminar->segundonombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="{{$eliminar->apellidos}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Sexo</label>
    <input type="text" name="sexo" id="ciudad" value="{{$eliminar->sexo}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Fecha de nacimiento</label>
    <input type="text" name="fechaN" id="fechaN" value="{{$eliminar->fechaN}}" class="form-control">
    </div>


<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection
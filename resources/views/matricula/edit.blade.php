@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Editar afiliado</h1>

<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/alumno/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">Identidad</label>
    <input type="text" name="identidad" id="identidad" value="{{$editar->idalumno}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Primer nombre</label>
    <input type="text" name="nombre" id="primernombre" value="{{$editar->primernombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Segundo nombre</label>
    <input type="text" name="nombre" id="segundonombre" value="{{$editar->segundonombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos" value="{{$editar->apellidos}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Sexo</label>
    <input type="text" name="sexo" id="ciudad" value="{{$editar->sexo}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Fecha de nacimiento</label>
    <input type="text" name="fechaN" id="fechaN" value="{{$editar->fechaN}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection
@extends('layouts.principal')
@section('hijos')
<h1>Editar seccion</h1>

<div class="container">
<div class="row">
<div class="col">

<form action="/seccion/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion" id="idseccion" value="{{$editar->idseccion}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion" value="{{$editar->descripcion}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Jornada</label>
    <input type="text" name="jornada" id="jornada" value="{{$editar->jornada}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Periodo</label>
    <input type="text" name="periodo" id="periodo" value="{{$editar->perido}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection
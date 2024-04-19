@extends('layouts.principal')
@section('hijos')
<h1>Editar clase</h1>

<div class="container">
<div class="row">
<div class="col">

<form action="/clase/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">IdClase</label>
    <input type="text" name="idclase" id="idclase" value="{{$editar->idclase}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion" id="idseccion" value="{{$editar->idseccion}}" class="form-control">
    </div>


<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection
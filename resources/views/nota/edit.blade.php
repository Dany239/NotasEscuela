@extends('layouts.principal')
@section('hijos')
<h1>Editar nota</h1>

<div class="container">
<div class="row">
<div class="col">


<form action="/nota/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">Identidad</label>
    <input type="text" name="identidad" id="identidad" value="{{$editar->idalumno}}" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="">Nota</label>
    <input type="text" name="nota" id="nota" value="{{$editar->nota}}" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="">Id clase</label>
    <input type="text" name="idclase" id="idclase" value="{{$editar->idclase}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Id seccion</label>
    <input type="text" name="idseccion" id="idseccion" value="{{$editar->idseccion}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection
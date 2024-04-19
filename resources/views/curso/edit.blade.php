@extends('layouts.principal')
@section('hijos')
<h1>Editar curso</h1>

<div class="container">
<div class="row">
<div class="col">


<form action="/curso/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">IdCurso</label>
    <input type="text" name="idcurso" id="idcurso" value="{{$editar->idcurso}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">IdDescripcion</label>
    <input type="text" name="iddescripcion" id="iddescripcion" value="{{$editar->iddescripcion}}" class="form-control">
    </div>

   
<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection
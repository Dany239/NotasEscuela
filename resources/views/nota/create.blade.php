@extends('layouts.principal')
@section('hijos')
<h1>Guardar nota</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/nota" method="POST">
    @csrf
    
    <div class="mb-3">
    <label for="">Identidad</label>
    <input type="text" name="idalumno" value="{{$identidad}}"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nota</label>
    <input type="text" name="nota" class="form-control" >
    </div>

    <div class="mb-3">
    <label for="">Id clase</label>
    <input type="text" name="idclase"  class="form-control">
    </div>
   

    <div class="mb-3">
    <label for="">Id seccion</label>
    <input type="text" name="idseccion"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection
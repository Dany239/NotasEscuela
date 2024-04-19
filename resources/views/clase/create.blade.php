@extends('layouts.principal')
@section('hijos')
<h1>Crear Clase</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/clase" method="POST">
    @csrf

    <div class="mb-3">
    <label for="">IdClase</label>
    <input type="text" name="idclase"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection
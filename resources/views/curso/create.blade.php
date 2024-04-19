@extends('layouts.principal')
@section('hijos')
<h1>Crear curso</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/curso" method="POST">
    @csrf

    <div class="mb-3">
    <label for="">IdCurso</label>
    <input type="text" name="idcurso"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Descripcion</label>
    <input type="text" name="descripcion"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection
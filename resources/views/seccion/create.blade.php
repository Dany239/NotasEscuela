@extends('layouts.principal')
@section('hijos')
<h1>Crear Seccion</h1>
<div class="container">
<div class="row">
<div class="col">


<form action="/seccion" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">IdSeccion</label>
    <input type="text" name="idseccion" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Descripcion</label>
    <input type="text" name="descripcion"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Jornanda</label>
    <input type="text" name="jornada"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Periodo</label>
    <input type="text" name="periodo"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection
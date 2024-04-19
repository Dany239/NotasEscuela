@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Crear afiliado</h1>
<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/alumno" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">Identidad</label>
    <input type="text" name="identidad" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Primer nombre</label>
    <input type="text" name="primernombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Segundo nombre</label>
    <input type="text" name="segundonombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellidos</label>
    <input type="text" name="apellidos"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Sexo</label>
    <input type="text" name="sexo"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Fecha de nacimiento</label>
    <input type="text" name="fechaN"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection
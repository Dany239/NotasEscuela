@extends('layouts.principal')
@section('hijos')
<h1>Modulo de Alumnos</h1>
<a href="alumno/create" class="btn btn-primary">Crear nuevo alumno</a>


<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Identidad</th>
        <th>Primer nombre</th>
        <th>Segundo nombre</th>
        <th>Apellidos</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($alumnos as $alumno)
    <tr>
    <th>{{$alumno->id}}</th>
        <th>{{$alumno->idalumno}}</th>
        <th>{{$alumno->primernombre}}</th>
        <th>{{$alumno->segundonombre}}</th>
        <th>{{$alumno->apellidos}}</th>
        <th>{{$alumno->sexo}}</th>
        <th>{{$alumno->fechaN}}</th>
        <th>{{$alumno->edad}}</th>
        <th>
        <a href="/nota/{{$alumno->id}}" class="btn btn-success">Notas</a>
        <a href="/alumno/{{$alumno->id}}/edit" class="btn btn-info">Editar</a>
        <th> 
            <form action ="/alumno/{{$alumno->id}}" method="POST"> 
             @csrf
             @method('Delete') 
             <button type="submit" class="btn btn-warning">Eliminar</button>
             </form>
            </th>
    </th>
    </tr>
    @endforeach
</tbody>

</table>
@endsection
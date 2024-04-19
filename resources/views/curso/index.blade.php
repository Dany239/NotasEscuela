@extends('layouts.principal')
@section('hijos')
<h1>Registrar Cursos</h1>
<a href="curso/create" class="btn btn-primary">Registrar curso</a>


<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>IdCurso</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($cursos as $curso)
    <tr>
    <th>{{$curso->id}}</th>
        <th>{{$curso->idcurso}}</th>
        <th>{{$curso->nombre}}</th>
        <th>{{$curso->descripcion}}</th>
        <th>
        <a href="/curso/{{$curso->id}}/edit" class="btn btn-info">Editar</a>
        <th> 
            <form action ="/curso/{{$seccion->id}}" method="POST"> 
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
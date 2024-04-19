@extends('layouts.principal')
@section('hijos')
<h1>Registrar Secciones</h1>
<a href="seccion/create" class="btn btn-primary">Registrar seccion</a>


<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>IdSeccion</th>
        <th>Descripcion</th>
        <th>Jornanda</th>
        <th>Periodo</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($secciones as $seccion)
    <tr>
    <th>{{$seccion->id}}</th>
        <th>{{$seccion->idseccion}}</th>
        <th>{{$seccion->descripcion}}</th>
        <th>{{$seccion->jornada}}</th>
        <th>{{$seccion->periodo}}</th>
        <th>
        <a href="/seccion/{{$seccion->id}}/edit" class="btn btn-info">Editar</a>
        <th> 
            <form action ="/seccion/{{$seccion->id}}" method="POST"> 
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
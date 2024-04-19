@extends('layouts.principal')
@section('hijos')
<h1>Registrar Clases</h1>
<a href="clase/create" class="btn btn-primary">Registrar clase</a>


<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>IdClase</th>
        <th>Nombre</th>
        <th>IdSeccion</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($clases as $clase)
    <tr>
    <th>{{$clase->id}}</th>
        <th>{{$clase->idclase}}</th>
        <th>{{$clase->nombre}}</th>
        <th>{{$clase->idseccion}}</th>
        <th>
        <a href="/clase/{{$clase->id}}/edit" class="btn btn-info">Editar</a>
        <th> 
            <form action ="/clase/{{$clase->id}}" method="POST"> 
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
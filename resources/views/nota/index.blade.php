@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Personas</h1>

<a href="/nota/create/{{$alumno->idalumno}}" class="btn btn-primary">Guardar nota</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Identidad</th>
            <th>Nota</th>
            <th>Id clase</th>
            <th>Id seccion</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach($notas as $nota)
        @if($nota->idalumno==$alumno->idalumno)
        <tr>
            <th>{{$nota->id}}</th>
            <th>{{$nota->idalumno}}</th>
            <th>{{$nota->nota}}</th>
            <th>{{$nota->idclase}}</th>
            <th>{{$nota->idseccion}}</th>
            <td>

                <form action="/nota/{{$nota->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <button type="submit" class="btn btn-warning btn-table">Eliminar</button>
                </form>
            </td>
            <td>
                <a href="/nota/{{$nota->id}}/edit" class="btn btn-info btn-table">Editar</a>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>

</table>
@endsection
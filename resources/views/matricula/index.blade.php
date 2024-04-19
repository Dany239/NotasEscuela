@extends('layouts.principal')
@section('hijos')
<h1>Modulo de Matriculas</h1>
<a href="matricula/create" class="btn btn-primary">Nueva Matricula</a>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alumno</th>
            <th>Curso</th>
            <th>Fecha Matricula</th>

        </tr>
    </thead>

    <tbody>
        @foreach($matriculas as $m)
        <tr>
            <th>{{$m->id}}</th>
            <th>{{$m->primernombre.' '.$m->segundonombre}}</th>
            <th>{{$m->nombre}}</th>
            <th>{{$m->fecha_matricula}}</th>
            <th>
            <th>
                <form action=" {{route('matricula_delete')}} " method="POST">
                    @csrf
                    @method('Delete')
                    <input type="hidden" name="id" value="{{$m->MatriculaId}}">
                    <button type="submit" class="btn btn-warning">Eliminar</button>

                </form>
            </th>

            <th>
                <form action=" {{route('matricula_delete')}} " method="POST">
                    @csrf
                    @method('Delete')
                    <input type="hidden" name="id" value="{{$m->MatriculaId}}">
                    <button type="submit" class="btn btn-warning">Eliminar</button>

                </form>
            </th>
            </th>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Crear Matricula</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <!--metodo post hace referencia al store en el controlador-->

            <form action=" {{route('matricula_store')}} "  method="POST">
                @csrf

                <div class="mb-3">
                    <label for="">Alumno</label>
                    <select name="alumno" id="">
                        <option selected disabled>Seleccione un alumno</option>
                        @foreach($alumno as $a)
                        <option value="{{$a->id}}" >{{$a->primernombre." ".$a->segundonombre}}</option>
                        @endforeach

                    </select>
                    <br />
                    <br />
                    <label for="">Curso</label>
                    <select  name="curso" id="">
                        <option selected default disabled>Seleccione un Curso</option>
                        @foreach($curso as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit">Guardar</button>
            </form>

        </div>
    </div>
</div>

@endsection
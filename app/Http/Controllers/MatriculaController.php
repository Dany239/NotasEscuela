<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $matriculas = DB::table('matriculas')
        ->join('alumnos','alumnos.id','matriculas.idAlumno')
        ->join('cursos','cursos.id','matriculas.idCurso')
        ->select('*','matriculas.created_at as fecha_matricula', 'matriculas.id as MatriculaId')
        ->get();

         
        return view('matricula.index')->with('matriculas', $matriculas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {

        
        $curso = Curso::All();
        $alumno = Alumno::All();
        return view('matricula.create')->with(['alumno' => $alumno, 'curso' => $curso]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       

        $matricula = new Matricula();
        $matricula->idAlumno = $request->get('alumno');
        $matricula->idCurso = $request->get('curso');
        $matricula->save();
        return redirect()->route('matricula');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eliminarRegistro = Alumno::find($id);
        return view('alumno.delete')->with('eliminar', $eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar = Alumno::find($id);
        return view('alumno.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
        $eliminarRegistro = Matricula::find($req->get('id'));
        $eliminarRegistro->delete();
        return redirect()->route('matricula');
    }
}

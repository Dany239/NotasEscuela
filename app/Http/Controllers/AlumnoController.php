<?php


namespace App\Http\Controllers;
Use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumno=Alumno::All();
        return view('alumno.index')->with('alumnos',$alumno);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno ->idalumno=$request->get('identidad');
        $alumno ->primernombre=$request->get('primernombre');
        $alumno ->segundonombre=$request->get('segundonombre');
        $alumno ->apellidos=$request->get('apellidos');
        $alumno ->sexo=$request->get('sexo');
        $alumno ->fechaN=$request->get('fechaN');
        $alumno ->save();
        return redirect('/alumno');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eliminarRegistro=Alumno::find($id);
        return view('alumno.delete')->with('eliminar',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar=Alumno::find($id);
        return view('alumno.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno=Alumno::find($id);
        $alumno ->idalumno=$request->get('identidad');
        $alumno ->primernombre=$request->get('primernombre');
        $alumno ->segundonombre=$request->get('segundonombre');
        $alumno ->apellidos=$request->get('apellidos');
        $alumno ->sexo=$request->get('sexo');
        $alumno ->fechaN=$request->get('fechaN');
        $alumno ->save();
        return redirect('/alumno');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminarRegistro=Alumno::find($id);
        $eliminarRegistro->delete();
        return redirect('/alumno');
    }
}

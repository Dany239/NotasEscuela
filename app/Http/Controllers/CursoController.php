<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Curso;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $curso=Curso::All();
        return view('curso.index')->with('cursos',$curso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $curso = new Curso();
        $curso ->idcurso=$request->get('idcurso');
        $curso ->nombre=$request->get('nombre');
        $curso ->descripcion=$request->get('descripcion');
        $curso ->save();
        return redirect('/curso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Curso::find($id);
        return view('curso.delete')->with('eliminar',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=Curso::find($id);
        return view('curso.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $curso=Curso::find($id);
        $curso ->idcurso=$request->get('idcurso');
        $curso ->nombre=$request->get('nombre');
        $curso ->descripcion=$request->get('descripcion');
        $curso ->save();
        return redirect('/curso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Curso::find($id);
        $eliminarRegistro->delete();
        return redirect('/curso');
    }
}

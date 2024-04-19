<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use App\Models\Alumno;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        return view('nota.create')->with('identidad',$id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nota = new Nota();
        $nota->idalumno=$request->get('idalumno');
        $nota->nota=$request->get('nota');
        $nota->idclase=$request->get('idclase');
        $nota->idseccion=$request->get('idseccion');
        $nota->save();
       return redirect('/alumno');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumnos=Alumno::find($id);
        $notas=Nota::All();
        return view('nota.index')->with('notas',$notas)->with('alumno',$alumnos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar=Nota::find($id);
        return view('nota.edit')->with('editar', $editar); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editar=Nota::find($id);
        $editar->idalumno=$request->get('identidad');
        $editar->nota=$request->get('nota');
        $editar->idclase=$request->get('idclase');
        $editar->idseccion=$request->get('idseccion');
        $editar->save();
        return redirect('/alumno');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminarRegistro=Nota::find($id);
        $eliminarRegistro->delete();
        return redirect('/alumno');
    }
}

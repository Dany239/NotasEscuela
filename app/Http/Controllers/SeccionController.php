<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Seccion;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $seccion=Seccion::All();
        return view('seccion.index')->with('secciones',$seccion);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('seccion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $seccion = new Seccion();
        $seccion ->idseccion=$request->get('idseccion');
        $seccion ->descripcion=$request->get('descripcion');
        $seccion ->jornada=$request->get('jornada');
        $seccion ->periodo=$request->get('periodo');
        $seccion ->save();
        return redirect('/seccion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminarRegistro=Seccion::find($id);
        return view('seccion.delete')->with('eliminar',$eliminarRegistro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=Seccion::find($id);
        return view('seccion.edit')->with('editar', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $seccion=Seccion::find($id);
        $seccion ->idseccion=$request->get('idseccion');
        $seccion ->descripcion=$request->get('descripcion');
        $seccion ->jornada=$request->get('jornada');
        $seccion ->periodo=$request->get('periodo');
        $seccion ->save();
        return redirect('/seccion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminarRegistro=Seccion::find($id);
        $eliminarRegistro->delete();
        return redirect('/seccion');
    }
}

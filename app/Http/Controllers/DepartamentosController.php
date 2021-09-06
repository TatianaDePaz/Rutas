<?php

namespace App\Http\Controllers;
use App\Models\Departamentos;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamentos::all();
        return view('departamentos.index',compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_departamento'=>'required',
        ]);
        Departamentos::create($request->all());

        return redirect()->route('departamentos.index')->with('success','Departamento creado satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamentos $departamentos)
    {
        return view('departamentos.edit',compact('departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamentos $departamentos)
    {
        $request->validate([
            'nombre_departamento'=>'required',
        ]);
        $departamentos->update($request->all());
        return redirect()->route('departamentos.index')->with('success','Departamento actualizado de forma satisfactoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamentos $departamentos)
    {
        $departamentos->delete();
        return redirect()->route('departamentos.index')->with('success','Departamento borrado');
    }

}

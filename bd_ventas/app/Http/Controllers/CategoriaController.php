<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = new Categoria();
        return $categoria->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $categoria = new Categoria();
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->estado = $request->estado;
     
         
            $categoria->save();
            return $categoria;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $id)
    {
        $categoria = new Categoria();
        return $categoria->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $id, Request $request)
    {
        try {
            $categoria = Categoria::find($id);
            $categoria->nombre = $request->nombre;
            $categoria->descripcion = $request->descripcion;
            $categoria->estado = $request->estado;
            $categoria->save();
            return $categoria;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete;
        return $categoria;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Detalleingreso;
use Illuminate\Http\Request;

class DetalleingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalleingreso = new Detalleingreso();
        return $detalleingreso->all();
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
            $detalleingreso = new Detalleingreso();
            $detalleingreso->id_ingreso = $request->id_ingreso;
            $detalleingreso->id_articulo = $request->id_articulo;
            $detalleingreso->cantidad = $request->cantidad;
            $detalleingreso->precio = $request->precio;
         
            $detalleingreso->save();
            return $detalleingreso;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalleingreso $id)
    {
        $detalleingreso = new Detalleingreso();
        return $detalleingreso->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalleingreso $id, Request $request)
    {
        try {
            $detalleingreso = Detalleingreso::find($id);
            $detalleingreso->id_ingreso = $request->id_ingreso;
            $detalleingreso->id_articulo = $request->id_articulo;
            $detalleingreso->cantidad = $request->cantidad;
            $detalleingreso->precio = $request->precio;
            $detalleingreso->save();
            return $detalleingreso;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalleingreso $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalleingreso $id)
    {
        $detalleingreso = Detalleingreso::find($id);
        $detalleingreso->delete;
        return $detalleingreso;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingreso = new Ingreso();
        return $ingreso->all();
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
            $ingreso = new Ingreso();
            $ingreso->id_persona_proveedor = $request->id_persona_proveedor;
            $ingreso->id_usuario = $request->id_usuario;
            $ingreso->tipo_comprobante = $request->tipo_comprobante;
            $ingreso->serie_comprobante = $request->serie_comprobante;
            $ingreso->num_comprobante = $request->num_comprobante;
            $ingreso->fecha = $request->fecha;
            $ingreso->impuesto = $request->impuesto;
            $ingreso->total = $request->total;
            $ingreso->estado = $request->estado;

            $ingreso->save();
            return $ingreso;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingreso $id)
    {
        $ingreso = new Ingreso();
        return $ingreso->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingreso $id, Request $request)
    {
        try {
            $ingreso = Ingreso::find($id);
            $ingreso->id_persona_proveedor = $request->id_persona_proveedor;
            $ingreso->id_usuario = $request->id_usuario;
            $ingreso->tipo_comprobante = $request->tipo_comprobante;
            $ingreso->serie_comprobante = $request->serie_comprobante;
            $ingreso->num_comprobante = $request->num_comprobante;
            $ingreso->fecha = $request->fecha;
            $ingreso->impuesto = $request->impuesto;
            $ingreso->total = $request->total;
            $ingreso->estado = $request->estado;
            $ingreso->save();
            return $ingreso;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingreso $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingreso $id)
    {
        $ingreso = Ingreso::find($id);
        $ingreso->delete;
        return $ingreso;
    }
}

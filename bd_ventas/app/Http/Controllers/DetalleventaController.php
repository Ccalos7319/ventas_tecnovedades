<?php

namespace App\Http\Controllers;

use App\Models\Detalleventa;
use Illuminate\Http\Request;

class DetalleventaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalleventa = new Detalleventa();
        return $detalleventa->all();
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
            $detalleventa = new Detalleventa();
            $detalleventa->id_venta = $request->id_venta;
            $detalleventa->id_articulo = $request->id_articulo;
            $detalleventa->cantidad = $request->cantidad;
            $detalleventa->precio = $request->precio;
            $detalleventa->descuento = $request->descuento;
            $detalleventa->save();
            return $detalleventa;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalleventa $id)
    {
        $detalleventa = new Detalleventa();
        return $detalleventa->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalleventa $id, Request $request)
    {
        try {
            $detalleventa = Detalleventa::find($id);
            $detalleventa->id_venta = $request->id_venta;
            $detalleventa->id_articulo = $request->id_articulo;
            $detalleventa->cantidad = $request->cantidad;
            $detalleventa->precio = $request->precio;
            $detalleventa->descuento = $request->descuento;
            $detalleventa->save();
            return $detalleventa;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalleventa $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalleventa $id)
    {
        $detalleventa = Detalleventa::find($id);
        $detalleventa->delete;
        return $detalleventa;
    }
}

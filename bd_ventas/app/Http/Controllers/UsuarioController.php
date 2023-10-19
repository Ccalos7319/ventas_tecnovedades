<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
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
            $usuario = new Usuario();
           
            $usuario->id_rol = $request->id_rol;
            $usuario->nombre = $request->nombre;
            $usuario->tipo_documento = $request->tipo_documento;
            $usuario->num_documento = $request->num_documento;
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->email = $request->email;
            $usuario->clave = $request->clave;
            $usuario->estado = $request->estado;
            $usuario->save();
            return $usuario;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $id)
    {
        $usuario = new Usuario();
        return $usuario->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $id, Request $request)
    {
        try {
            $usuario = Usuario::find($id);
          
            $usuario->id_rol = $request->id_rol;
            $usuario->nombre = $request->nombre;
            $usuario->tipo_documento = $request->tipo_documento;
            $usuario->num_documento = $request->num_documento;
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->email = $request->email;
            $usuario->clave = $request->clave;
            $usuario->estado = $request->estado;
            $usuario->save();
            return $usuario;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete;
        return $usuario;
    }
}

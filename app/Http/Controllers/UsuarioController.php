<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * listar
     */
    public function index()
    {
        $lista = \App\Models\User::all();
        return view('usuarios.listar',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('usuarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario=new \App\Models\User();
        $usuario->name=$request->nome;
        $usuario->email=$request->email;
        $usuario->password=$request->senha;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = \App\Models\User::find($id);
        return view('usuarios.mostrar',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = \App\Models\User::find($id);
        return view('usuarios.editar',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = \App\Models\User::find($id);
        $usuario->name=$request->nome;
        $usuario->email=$request->email;
        $usuario->password=$request->senha;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = \App\Models\User::find($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

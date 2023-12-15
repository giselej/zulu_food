<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PratoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = \App\Models\Prato::all();
        return view('pratos.listar',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pratos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prato=new \App\Models\Prato();
        $prato->nome=$request->nome;
        $prato->valor=$request->valor;
        $prato->save();
        return redirect()->route('pratos.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prato = \App\Models\Prato::find($id);
        return view('pratos.mostrar',compact('prato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prato = \App\Models\Prato::find($id);
        return view('pratos.editar',compact('prato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prato = \App\Models\Prato::find($id);
        $prato->nome=$request->nome;
        $prato->valor=$request->valor;
        $prato->save();
        return redirect()->route('pratos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Prato::destroy($id);
        return redirect()->route('pratos.index');
    }
}

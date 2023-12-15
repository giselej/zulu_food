<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = \App\Models\comanda::all();
        return view('comandas.listar',compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comandas.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comanda=new \App\Models\Comanda();
        $comanda->numero_mesa=$request->numero_mesa;
        $comanda->cliente=$request->cliente;
        $comanda->save();
        return redirect()->route('comandas.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $comanda = \App\Models\Comanda::find($id);
        return view('comandas.mostrar',compact('comanda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $comanda = \App\Models\Comanda::find($id);
        return view('comandas.editar',compact('comanda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comanda = \App\Models\Comanda::find($id);
        $comanda->numero_mesa=$request->numero_mesa;
        $comanda->cliente=$request->cliente;
        $comanda->save();
        return redirect()->route('comandas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Comanda::destroy($id);
        return redirect()->route('comandas.index');
    }
}

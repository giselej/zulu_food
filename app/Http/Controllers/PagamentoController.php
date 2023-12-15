<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = \App\Models\pagamento::all();
        return view('pagamentos.listar',compact('lista')); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagamentos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pagamento=new \App\Models\Pagamento();
        $pagamento->tipo_pagamento=$request->tipo;
        $pagamento->valor=$request->valor;
        $pagamento->comanda_id=$request->comanda_id;
        $pagamento->save();
        return redirect()->route('pagamentos.index');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pagamento = \App\Models\Pagamento::find($id);
        return view('pagamentos.mostrar',compact('pagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $pagamento = \App\Models\Pagamento::find($id);
        return view('pagamentos.editar',compact('pagamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pagamento = \App\Models\Pagamento::find($id);
        $pagamento->tipo_pagamento=$request->tipo;
        $pagamento->valor=$request->valor;
        $pagamento->comanda_id=$request->comanda_id;
        $pagamento->save();
        return redirect()->route('pagamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pagamento = \App\Models\Pagamento::find($id);
        $pagamento->delete();
        return redirect()->route('pagamentos.index');
    }
}

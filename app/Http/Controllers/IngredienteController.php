<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\Receita;
use App\Http\Requests\IngredienteRequest;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.index', compact('ingredientes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $receitas = Receita::all();
        return view('ingredientes.create', compact('receitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IngredienteRequest $request)
    {
       Ingrediente::create($request->all());

        return redirect()->route('ingredientes.index')->with('mensagem', 'Ingrediente criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $receitas = Receita::all();
        return view('ingredientes.edit', compact('ingrediente', 'receitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IngredienteRequest $request, string $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->update($request->all());

        return redirect()->route('ingredientes.index')->with('mensagem', 'Ingrediente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->delete();

        return redirect()->route('ingredientes.index')->with('mensagem', 'Ingrediente deletado com sucesso!');
    }
}

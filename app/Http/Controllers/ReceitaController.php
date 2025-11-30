<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Receita;

use App\Models\Categoria;

use App\Http\Requests\ReceitaRequest;

class ReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receitas = Receita::with('categoria')->get();
        return view('receitas.index', compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('receitas.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReceitaRequest $request)
    {
        Receita::create($request->all());
        return redirect()->route("receitas.index")->with("mensagem", "Receita criada com sucesso!");
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
        $receita = Receita::findOrFail($id);
        $categorias = Categoria::all();
        return view('receitas.edit', compact('receita', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReceitaRequest $request, string $id)
    {

        $receita = Receita::findOrFail($id);
        $receita->update($request->all());
        return redirect()->route('receitas.index')->with('mensagem', 'Receita atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $receita = Receita::findOrFail($id);
        $receita->delete();
        return redirect()->route('receitas.index')->with('mensagem', 'Receita excluída com sucesso!');
    }
}

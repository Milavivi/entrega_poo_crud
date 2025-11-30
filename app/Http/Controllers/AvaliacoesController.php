<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;
use App\Http\Requests\AvaliacoesRequest;

class AvaliacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $avaliacoes = Avaliacao::all();
        return view("avaliacoes.index", compact('avaliacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("avaliacoes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AvaliacoesRequest $request)
    {
        Avaliacao::create($request->all());

        return redirect()->route('avaliacoes.index')->with('mensagem', 'Avaliação criada com sucesso!');
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
        $avaliacao = Avaliacao::findOrFail($id);
        return view('avaliacoes.edit', compact('avaliacao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AvaliacoesRequest $request, string $id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $avaliacao->update($request->all());

        return redirect()->route('avaliacoes.index')->with('mensagem', 'Avaliação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        $avaliacao->delete();

        return redirect()->route('avaliacoes.index')->with('mensagem', 'Avaliação removida com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Http\Requests\FavoritoRequest;

class FavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favoritos = Favorito::all();
        return view('favoritos.index', compact('favoritos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('favoritos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FavoritoRequest $request)
    {
        Favorito::create($request->all());
        return redirect()->route('favoritos.index')->with('mensagem', 'Favoritos adicionado com sucesso!');
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
        $favorito = Favorito::findOrFail($id);
        return view('favoritos.edit', compact('favorito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FavoritoRequest $request, string $id)
    {
        $favorito = Favorito::findOrFail($id);
        $favorito->update($request->all());
        return redirect()->route('favoritos.index')->with('mensagem', 'Favoritos atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $favorito = Favorito::findOrFail($id);
        $favorito->delete();
        return redirect()->route('favoritos.index')->with('mensagem', 'Favorito removido com sucesso!');
    }
}

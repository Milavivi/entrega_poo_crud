<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
<<<<<<< HEAD
use App\Http\Requests\CategoriaRequest;
=======
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("categorias.index", compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categorias.create");
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(CategoriaRequest $request)
    {
        Categoria::create($request->all());

        return redirect()->route("categorias.index")->with("mensagem", "Categoria criada com sucesso!");
=======
    public function store(Request $request)
    {
        Categoria::create($request->all());

        return redirect()->route("categorias.index");
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e
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
        $categorias = Categoria::findOrFail($id);
        return view("categorias.edit", compact("categorias"));
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(CategoriaRequest $request, string $id)
=======
    public function update(Request $request, string $id)
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->update($request->all());

<<<<<<< HEAD
         return redirect()->route("categorias.index")->with("mensagem", "Categoria atualizada com sucesso!");
=======
         return redirect()->route("categorias.index");
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();

<<<<<<< HEAD
        return redirect()->route("categorias.index")->with("mensagem", "Categoria excluída com sucesso!");
=======
        return redirect()->route("categorias.index");
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e



    }
}

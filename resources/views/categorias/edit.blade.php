<<<<<<< HEAD
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Editar Categoria
        </h2>
    </x-slot>

    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-md mx-auto px-4">

            <div class="bg-white p-6 rounded-lg shadow-lg">

                <h1 class="text-2xl font-bold text-pink-800 mb-5">Editar Categoria</h1>

                @if($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <ul class="list-disc ml-4 text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('categorias.update', $categorias->id) }}" method="POST" class="space-y-4">
                    @method("PUT")
                    @csrf

                    <div>
                        <label for="nome" class="block text-sm font-medium text-pink-800 mb-1">Nome da categoria:</label>
                        <input type="text" name="nome" id="nome" 
                               value="{{ old('nome', $categorias->nome) }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>
                    

                    <div class="flex justify-between items-center pt-3">

                        <a href="{{ route('categorias.index') }}" class="text-pink-600 hover:text-pink-800 text-sm font-medium">
                            ← Cancelar
                        </a>

                        <button type="submit" 
                                class="px-4 py-2 bg-orange-500 rounded-lg font-bold text-sm text-white hover:bg-orange-600 shadow-md">
                            Salvar Alterações
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>editar uma categoria:</h1>

    <form action="{{route ('categorias.update', $categorias->id)}}" method="post">
        @method("put")
        @csrf
        <label for="nome">nome da categoria:</label>
        <input type="text" name="nome" value="{{ $categorias->nome }}">
        <input type="submit" value="editar">
    </form>
</body>
</html>
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e

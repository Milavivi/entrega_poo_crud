<<<<<<< HEAD
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Categorias
        </h2>
    </x-slot>
    
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-xl mx-auto px-4">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-pink-800">Gerenciar Categorias</h1>
                <a href="{{ route('categorias.create') }}" 
                   class="px-3 py-1 bg-orange-500 rounded-lg font-bold text-sm text-white hover:bg-orange-600 shadow-md">
                    + Nova
                </a>
            </div>

            @if(session('mensagem'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('mensagem') }}
                </div>
            @endif
            <div class="bg-white shadow-lg rounded-lg divide-y divide-gray-100">
                @if($categorias->isEmpty())
                    <p class="p-4 text-center text-gray-500">Nenhuma categoria cadastrada.</p>
                @else
                    @foreach($categorias as $cat)
                    <div class="p-3 flex justify-between items-center hover:bg-pink-50">
                        <p class="text-base font-medium text-pink-800">{{ $cat->nome }}</p>

                        <div class="flex space-x-2 text-xs">
                            <a href="{{ route('categorias.edit', $cat->id) }}" 
                               class="text-pink-600 hover:text-pink-800 font-medium">
                                Editar
                            </a>
                            <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST"
                                  onsubmit="return confirm('Excluir {{ $cat->nome }}?');"
                                  class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-medium">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                @endif
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
    <h1>Categorias</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    @foreach($categorias as $cat)
    <tr>
        <td>{{ $cat->nome }}</td>
        <td>
           <button type="button"><a href="{{ route('categorias.edit', $cat->id) }}">Editar</a> </button> 
            
            <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Excluir">
            </form>
        </td>
    </tr>
    @endforeach
</table>

<button type="button"><p><a href="{{ route('categorias.create') }}"> Criar nova categoria</a></p></button>

</body>
</html>
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e

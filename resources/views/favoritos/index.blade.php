<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Gestão de Favoritos
        </h2>
    </x-slot>
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-xl mx-auto px-4">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-pink-800">Minhas Receitas Favoritas</h1>
                <a href="{{ route('favoritos.create') }}" 
                   class="px-3 py-1 bg-orange-500 rounded-lg font-bold text-white hover:bg-orange-600 shadow-md">
                    + Novo Favorito
                </a>
            </div>

            @if(session('mensagem'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('mensagem') }}
                </div>
            @endif

            <div class="bg-white shadow-xl rounded-lg overflow-x-auto">
                
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-pink-200 text-pink-800 uppercase text-xs font-bold">
                            <th class="py-2 px-3 text-left">Usuário</th>
                            <th class="py-2 px-3 text-left">Título da Receita</th>
                            <th class="py-2 px-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700">
                        @if($favoritos->isEmpty())
                            <tr>
                                <td colspan="3" class="py-4 px-3 text-center text-gray-500">
                                    Nenhum favorito cadastrado.
                                </td>
                            </tr>
                        @else
                            @foreach($favoritos as $favorito)
                            <tr class="hover:bg-pink-50">
                                <td class="py-2 px-3 font-medium">{{ $favorito->usuario }}</td>
                                <td class="py-2 px-3">{{ $favorito->titulo }}</td>
                                
                                <td class="py-2 px-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('favoritos.edit', $favorito->id) }}" class="text-pink-600 hover:text-pink-800 font-medium text-xs">
                                            Editar
                                        </a>
                                        <form action="{{ route('favoritos.destroy', $favorito->id) }}" method="POST"
                                              onsubmit="return confirm('Remover {{ $favorito->titulo }} dos favoritos?');"
                                              class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium text-xs">
                                                Remover
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
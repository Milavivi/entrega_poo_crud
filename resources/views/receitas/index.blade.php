<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Todas as Receitas
        </h2>
    </x-slot>

    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-pink-800">Lista de Receitas</h1>
                <a href="{{ route('receitas.create') }}" 
                   class="px-3 py-1 bg-orange-500 rounded-lg font-bold text-white hover:bg-orange-600">
                    + Nova Receita
                </a>
            </div>

            @if(session('mensagem'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('mensagem') }}
                </div>
            @endif

            <div class="bg-white shadow-xl rounded-lg overflow-x-auto">
                
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-pink-200 text-pink-800 uppercase text-xs font-bold">
                            <th class="py-2 px-3 text-left">Título</th>
                            <th class="py-2 px-3 text-left">Categoria</th>
                            <th class="py-2 px-3 text-left">Descrição</th>
                            <th class="py-2 px-3 text-left">Preparo</th>
                            <th class="py-2 px-3 text-center">Tempo</th>
                            <th class="py-2 px-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700">
                        @if($receitas->isEmpty())
                            <tr>
                                <td colspan="6" class="py-4 px-3 text-center text-gray-500">
                                    Nenhuma receita cadastrada.
                                </td>
                            </tr>
                        @else
                            @foreach($receitas as $r)
                            <tr class="hover:bg-pink-50">
                                <td class="py-2 px-3 font-medium">{{ $r->titulo }}</td>
                                <td class="py-2 px-3">{{ $r->categoria->nome }}</td>
                                <td class="py-2 px-3 max-w-xs truncate">{!! nl2br($r->descricao) !!}</td>
                                <td class="py-2 px-3 max-w-xs truncate">{!! nl2br($r->modo_preparo) !!}</td>
                                <td class="py-2 px-3 text-center">{{ $r->tempo_preparo }} min</td>
                                
                                <td class="py-2 px-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('receitas.edit', $r->id) }}" class="text-pink-600 hover:text-pink-800 font-medium text-xs">
                                            Editar
                                        </a>
                                        <form action="{{ route('receitas.destroy', $r->id) }}" method="POST"
                                              onsubmit="return confirm('Excluir {{ $r->titulo }}?');"
                                              class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-medium text-xs">
                                                Excluir
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
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Gestão de Ingredientes
        </h2>
    </x-slot>
    
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-pink-800">Ingredientes Cadastrados</h1>
                <a href="{{ route('ingredientes.create') }}" 
                   class="px-3 py-1 bg-orange-500 rounded-lg font-bold text-sm text-white hover:bg-orange-600 shadow-md">
                    + Novo Ingrediente
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

                            <th class="py-2 px-3 text-left">Nome</th>
                            <th class="py-2 px-3 text-center">Quantidade</th>
                            <th class="py-2 px-3 text-center">Unidade</th>
                            <th class="py-2 px-3 text-left">Receita</th>
                            <th class="py-2 px-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700 text-sm">
                        @if($ingredientes->isEmpty())
                            <tr>
                                <td colspan="5" class="py-4 px-3 text-center text-gray-500">
                                    Nenhum ingrediente cadastrado.
                                </td>
                            </tr>
                        @else
                            @foreach($ingredientes as $ing)
                            <tr class="hover:bg-pink-50">
                                <td class="py-2 px-3 font-medium">{{ $ing->nome }}</td>
                                <td class="py-2 px-3 text-center">{{ $ing->quantidade }}</td>
                                <td class="py-2 px-3 text-center">{{ $ing->unidade }}</td>
                                <td class="py-2 px-3 max-w-xs truncate">{{ $ing->receita->titulo }}</td>
                                
                                <td class="py-2 px-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('ingredientes.edit', $ing->id) }}" class="text-pink-600 hover:text-pink-800 font-medium text-xs">
                                            Editar
                                        </a>
                                        <form action="{{ route('ingredientes.destroy', $ing->id) }}" method="POST"
                                              onsubmit="return confirm('Excluir {{ $ing->nome }}?');"
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
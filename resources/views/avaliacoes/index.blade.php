<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Gestão de Avaliações
        </h2>
    </x-slot>
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-pink-800">Avaliações Recebidas</h1>
                <a href="{{ route('avaliacoes.create') }}" 
                   class="px-3 py-1 bg-orange-500 rounded-lg font-bold text-sm text-white hover:bg-orange-600 shadow-md">
                    + Nova Avaliação
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
                            <th class="py-2 px-3 text-center">Nota</th>
                            <th class="py-2 px-3 text-left">Comentário</th>
                            <th class="py-2 px-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700 text-sm">
                        @if($avaliacoes->isEmpty())
                            <tr>
                                <td colspan="4" class="py-4 px-3 text-center text-gray-500">
                                    Nenhuma avaliação cadastrada.
                                </td>
                            </tr>
                        @else
                            @foreach($avaliacoes as $avaliacao)
                            <tr class="hover:bg-pink-50">
                                <td class="py-2 px-3 font-medium">{{ $avaliacao->usuario }}</td>
                                <td class="py-2 px-3 text-center">{{ $avaliacao->nota }}</td>
                                <td class="py-2 px-3 max-w-lg truncate">{!! nl2br(e($avaliacao->comentario)) !!}</td>
                                
                                <td class="py-2 px-3 text-center">
                                    <div class="flex justify-center space-x-2">
                                        <a href="{{ route('avaliacoes.edit', $avaliacao->id) }}" class="text-pink-600 hover:text-pink-800 font-medium text-xs">
                                            Editar
                                        </a>
                                        <form action="{{ route('avaliacoes.destroy', $avaliacao->id) }}" method="POST"
                                              onsubmit="return confirm('Excluir avaliação de {{ $avaliacao->usuario }}?');"
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
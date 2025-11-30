<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Editar Ingrediente
        </h2>
    </x-slot>
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-md mx-auto px-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">

                <h1 class="text-2xl font-bold text-pink-800 mb-5">Editar Ingrediente</h1>

                @if($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <ul class="list-disc ml-4 text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('ingredientes.update', $ingrediente->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nome" class="block text-sm font-medium text-pink-800 mb-1">Nome do ingrediente:</label>
                        <input type="text" name="nome" id="nome" 
                               value="{{ old('nome', $ingrediente->nome) }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>

                    <div class="flex space-x-4">

                        <div class="flex-1">
                            <label for="quantidade" class="block text-sm font-medium text-pink-800 mb-1">Quantidade:</label>
                            <input type="number" name="quantidade" id="quantidade" 
                                   value="{{ old('quantidade', $ingrediente->quantidade) }}" required
                                   class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                        </div>

                        <div class="flex-1">
                            <label for="unidade" class="block text-sm font-medium text-pink-800 mb-1">Unidade (ex: g, ml):</label>
                            <input type="text" name="unidade" id="unidade" 
                                   value="{{ old('unidade', $ingrediente->unidade) }}" required
                                   class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                        </div>
                    </div>

                    <div>
                        <label for="receita_id" class="block text-sm font-medium text-pink-800 mb-1">Receita:</label>
                        <select name="receita_id" id="receita_id" required
                                class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                            @foreach($receitas as $rec)
                            <option value="{{ $rec->id }}" 
                                    {{ old('receita_id', $ingrediente->receita_id) == $rec->id ? 'selected' : '' }}>
                                {{ $rec->titulo }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="flex justify-between items-center pt-3">
                        <a href="{{ route('ingredientes.index') }}" class="text-pink-600 hover:text-pink-800 text-sm font-medium">
                            ← Cancelar
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 bg-orange-500 rounded-lg font-bold text-sm text-white hover:bg-orange-600 shadow-md">
                            Atualizar Ingrediente
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
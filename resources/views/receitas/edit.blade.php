<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Editar Receita
        </h2>
    </x-slot>
    <div class="py-6 bg-pink-100 min-h-screen">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="bg-white p-6 rounded-xl shadow-lg">

                <h1 class="text-3xl font-bold text-pink-800 mb-6">Editar: {{ $receita->titulo }}</h1>

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc ml-5">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{ route('receitas.update', $receita->id) }}" method="POST" class="space-y-4">
                    @method('PUT')
                    @csrf

                    <div>
                        <label for="titulo" class="block text-sm font-medium text-pink-800">Título:</label>
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $receita->titulo) }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>

                    <div>
                        <label for="categoria_id" class="block text-sm font-medium text-pink-800">Categoria:</label>
                        <select name="categoria_id" id="categoria_id" required
                                class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                            @foreach($categorias as $cat)
                            <option value="{{ $cat->id }}" 
                                    {{ old('categoria_id', $receita->categoria_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->nome }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="tempo_preparo" class="block text-sm font-medium text-pink-800">Tempo de Preparo (minutos):</label>
                        <input type="number" name="tempo_preparo" id="tempo_preparo" value="{{ old('tempo_preparo', $receita->tempo_preparo) }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>

                    <div>
                        <label for="descricao" class="block text-sm font-medium text-pink-800">Descrição:</label>
                        <textarea name="descricao" id="descricao" rows="3" required
                                  class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">{{ old('descricao', $receita->descricao) }}</textarea>
                    </div>

                    <div>
                        <label for="modo_preparo" class="block text-sm font-medium text-pink-800">Modo de Preparo:</label>
                        <textarea name="modo_preparo" id="modo_preparo" rows="5" required
                                  class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">{{ old('modo_preparo', $receita->modo_preparo) }}</textarea>
                    </div>
                
                    <div class="flex justify-between items-center pt-4">
                        <a href="{{ route('receitas.index') }}" class="text-pink-600 hover:text-pink-800 text-sm font-medium">
                            ← Cancelar
                        </a>
                        <button type="submit" 
                                class="px-5 py-2 bg-orange-500 rounded-lg font-bold text-lg text-white hover:bg-orange-600 shadow-md transition">
                            Salvar Alterações
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
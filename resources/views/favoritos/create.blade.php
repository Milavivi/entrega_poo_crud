<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            Adicionar Favorito
        </h2>
    </x-slot>
    <div class="py-4 bg-pink-100 min-h-screen">
        <div class="max-w-md mx-auto px-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">

                <h1 class="text-2xl font-bold text-pink-800 mb-5">Adicionar Favorito</h1>

                @if($errors->any())
                    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                        <ul class="list-disc ml-4 text-sm">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               
                <form action="{{ route('favoritos.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="usuario" class="block font-medium text-pink-800 mb-1">Usuário:</label>
                        <input type="text" name="usuario" id="usuario" value="{{ old('usuario') }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>

                    <div>
                        <label for="titulo" class="block font-medium text-pink-800 mb-1">Título do Favorito:</label>
                        <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required
                               class="w-full border-gray-300 rounded-md focus:border-orange-500 focus:ring-orange-500">
                    </div>
            
                    <div class="flex justify-between items-center pt-3">
                        <a href="{{ route('favoritos.index') }}" class="text-pink-600 hover:text-pink-800 font-medium">
                            ← Voltar
                        </a>
                        <button type="submit" 
                                class="px-4 py-2 bg-pink-800 rounded-lg font-bold text-white hover:bg-pink-900 shadow-md">
                            Adicionar
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
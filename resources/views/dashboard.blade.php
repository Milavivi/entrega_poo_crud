<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-800 leading-tight">
            INÍCIO | NOVOS SABORES
        </h2>
    </x-slot>

    
    <div class="py-8 bg-pink-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            
            <div class="mb-6 text-center">
                <h1 class="text-3xl font-extrabold text-pink-800">
                    Bem-vindo(a), {{ Auth::user()->name }}!
                </h1>
                <p class="text-lg text-brown-700 mt-1">
                    O que vamos organizar hoje?
                </p>
            </div>

           
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                <a href="{{ route('receitas.index') }}" 
                   class="block bg-pink-800 p-4 rounded-xl shadow-lg transition hover:scale-[1.03] duration-200 border-2 border-orange-400">
                    <div class="flex flex-col justify-between h-full">
                        <h2 class="text-2xl font-bold text-white mb-4">
                            Receitas
                        </h2>
                        <span class="text-center bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-2 rounded-lg shadow-md w-full">
                            ACESSAR
                        </span>
                    </div>
                </a>

                <a href="{{ route('categorias.index') }}" 
                   class="block bg-pink-800 p-4 rounded-xl shadow-lg transition hover:scale-[1.03] duration-200 border-2 border-orange-400">
                    <div class="flex flex-col justify-between h-full">
                        <h2 class="text-2xl font-bold text-white mb-4">
                            Categorias
                        </h2>
                        <span class="text-center bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-2 rounded-lg shadow-md w-full">
                            ACESSAR
                        </span>
                    </div>
                </a>

                <a href="{{ route('ingredientes.index') }}" 
                   class="block bg-pink-800 p-4 rounded-xl shadow-lg transition hover:scale-[1.03] duration-200 border-2 border-orange-400">
                    <div class="flex flex-col justify-between h-full">
                        <h2 class="text-2xl font-bold text-white mb-4">
                            Ingredientes
                        </h2>
                        <span class="text-center bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-2 rounded-lg shadow-md w-full">
                            ACESSAR
                        </span>
                    </div>
                </a>

                <a href="{{ route('avaliacoes.index') }}" 
                   class="block bg-pink-800 p-4 rounded-xl shadow-lg transition hover:scale-[1.03] duration-200 border-2 border-orange-400">
                    
                    <div class="flex flex-col justify-between h-full">
                        <h2 class="text-2xl font-bold text-white mb-4">
                            Avaliações
                        </h2>
                        <span class="text-center bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-2 rounded-lg shadow-md w-full">
                            VER
                        </span>
                    </div>
                </a>

                <a href="{{ route('favoritos.index') }}" 
                   class="block bg-pink-800 p-4 rounded-xl shadow-lg transition hover:scale-[1.03] duration-200 border-2 border-orange-400">
                    
                    <div class="flex flex-col justify-between h-full">
                        <h2 class="text-2xl font-bold text-white mb-4">
                            Favoritos
                        </h2>
                        <span class="text-center bg-orange-500 hover:bg-orange-600 text-white text-lg font-semibold py-2 rounded-lg shadow-md w-full">
                            VER
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

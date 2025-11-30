<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\FavoritoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categorias', CategoriaController::class);
    Route::resource('receitas', ReceitaController::class);
    Route::resource('ingredientes', IngredienteController::class);
    Route::resource('avaliacoes', AvaliacoesController::class);
    Route::resource('favoritos', FavoritoController::class);
});

require __DIR__.'/auth.php';
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/categorias',[CategoriaController::class, "index"])->name("categorias.index");

Route::get('/categorias/create',[CategoriaController::class, "create"])->name("categorias.create");
Route::post('/categorias',[CategoriaController::class, "store"])->name("categorias.store");

Route::get('/categorias/{categoria}/edit',[CategoriaController::class, "edit"])->name("categorias.edit");
Route::put('/categorias/{categoria}',[CategoriaController::class, "update"])->name("categorias.update");

Route::delete('/categorias/{categoria}',[CategoriaController::class, "destroy"])->name("categorias.destroy");
>>>>>>> 3b157a2a34b724fd8ecadfdccc93d3fcf52b3b4e

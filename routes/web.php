<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/**
 * Use resource 
 */
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get("/autor", [AutorController::class, 'index']);/* 
Route::get("/autor/{id}/edit", [AutorController::class, 'edit']);
Route::post("/autor", [AutorController::class, 'store']);
Route::put("/autor/{id}", [AutorController::class, 'update']);
Route::delete("/autor/{id}", [AutorController::class, 'destroy']); */

Route::get("/livro/cadastro", App\Http\Livewire\Livro\BookCreate::class);
Route::get("/livro/excluir/{livro}", App\Http\Livewire\Livro\BookDeleteConfirm::class);
Route::get("/livro/edite/{livro}", App\Http\Livewire\Livro\BookEdite::class);


/* 
Route::get("/livro/{id}/edit", [LivroController::class, 'edit']);
Route::post("/livro", [LivroController::class, 'store']);
Route::put("/livro/{id}", [LivroController::class, 'update']);
Route::delete("/livro/{id}", [LivroController::class, 'destroy']);
*/

Route::get("/categoria", [GeneroController::class, 'index']);

Route::get("/categoria/cadastro", function(){
    return view('page/categoria/criar');
});

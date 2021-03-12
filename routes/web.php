<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/**
 * Use resource 
 */
use App\Http\Controllers\LivroController;


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

Route::get("/livro/", [LivroController::class, 'index']);
Route::get("/livro/cadastro", App\Http\Livewire\Livro\BookCreate::class);
Route::get("/livro/excluir/{livro}", App\Http\Livewire\Livro\BookDeleteConfirm::class);
Route::get("/livro/edite/{livro}", App\Http\Livewire\Livro\BookEdite::class);

<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

use App\Http\Controllers\AutorController;

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

Route::get("/autor", [AutorController::class, 'index']);
Route::get("/autor/{id}/edit", [AutorController::class, 'edit']);
Route::post("/autor", [AutorController::class, 'store']);
Route::put("/autor/{id}", [AutorController::class, 'update']);
Route::delete("/autor/{id}", [AutorController::class, 'destroy']);


Route::get("/book", [LivroController::class, 'index']);
Route::get("/book/{id}/edit", [LivroController::class, 'edit']);
Route::post("/book", [LivroController::class, 'store']);
Route::put("/book/{id}", [LivroController::class, 'update']);
Route::delete("/book/{id}", [LivroController::class, 'destroy']);

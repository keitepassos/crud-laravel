<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AnimalsController;

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
    return view('welcome');
});

Route::get('/list', [AnimalsController::class, 'show'] )->name('listar_animais');
Route::get('/animal/adicionar', [AnimalsController::class, 'create'] )->name('form_adicionar');
Route::post('/animal/adicionar', [AnimalsController::class, 'store'] )->name('form_adicionar');
Route::delete('/animal/remover/{id}', [AnimalsController::class, 'destroy'] )->name('form_remover');

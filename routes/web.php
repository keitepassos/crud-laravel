<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', function(){
    $nomes = [
        'Anakin',
        'Lea',
        'Cheetara',
        'Jailson'
    ];

    $html = "<ul>";
    foreach ($nomes as $nome){
      $html .="<li>$nome</li>";
    }
    $html .= "</ul>";

    return $html;
}

);

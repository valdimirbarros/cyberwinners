<?php

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
//SOBRESCRITA DO MÉTODO RESOURCE
Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'
]);


//ROTA BÁSICA HOME
Route::get('/', function () {
    return view('home');
});

//ROTAS PARA JOGADOR (PLAYER)
Route::resource('jogador', 'PlayerController');

//ROTAS PARA JOGO (GAME)
Route::resource('jogo', 'GameController');




<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;

Route::get('/', function () {
    return view('welcome');
});

/*  

A primeira esta na versão 7 do laravel ja a segunda na versao mais nova 11; mesma função
ao utilizar a "/" o framework entende que é um controlador, logo no final é preciso fornecer
o parametro, nesse caso sendo "principal"

*/
// Route::get('/', "PrincipalController@principal");
Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/contato', [ContatoController::class, 'contato']);
Route::get('/sobrenos', [SobrenosController::class, 'Sobrenos']);
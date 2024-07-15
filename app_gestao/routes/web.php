<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;



// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//         string $nome = 'Desconhecido',
//         int $categoria_id = 1
//     ) {
//         echo "Estamos aqui $nome - $categoria_id";
//     }

// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); //com esse código o Laravel entende que so pode receber numero e letra de acordo com os parâmetros


/*  

A primeira esta na versão 7 do laravel ja a segunda na versao mais nova 11; mesma função
ao utilizar a "/" o framework entende que é um controlador, logo no final é preciso fornecer
o parametro, nesse caso sendo "principal"

*/
// Route::get('/', "PrincipalController@principal");
Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/contato', [ContatoController::class, 'contato']);
Route::get('/sobrenos', [SobrenosController::class, 'Sobrenos']);
Route::get('/login', function () {
    return 'Login';
});


//prefix serve para agrupar varias rotas definindo um caminho maior por exemplo, "app/clientes"
route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    });
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    });
    Route::get('/produtos', function () {
        return 'Produtos';
    });
});

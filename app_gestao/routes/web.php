<?php

use Faker\Guesser\Name;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedoresController;


//outra forma de usar a função redirect, dentro da função de callback da rota

// route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');


//uma forma para usar a função redirect toda vez que cair na rota de origem, será redirecionado para a segunda rota
// Route::redirect('/rota2', '/rota1');

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
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');


//prefix serve para agrupar varias rotas definindo um caminho maior por exemplo, "app/clientes"
route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedoresController::class, 'fornecedores'])
        ->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

//função de fallback é um recurso utilizado quando o usuário acessa um link ou uma rota inexistente
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para pagina principal.';
});


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

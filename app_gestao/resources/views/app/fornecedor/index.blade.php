<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- fica o comentário que será descartado pelo interpretador do blade --}}


    {{-- {{ 'texto de teste' }}
    <br>
    <?= 'texto de teste' ?>
    <br> --}}

    @php

    @endphp

    <h3>Fornecedor</h3>

    {{-- @dd($fornecedores) '@dd' serve para exibir o array no blade.php --}}

    {{-- @if (count($fornecedores) > 0 && count($fornecedores) <= 5)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif (count($fornecedores) > 5)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não tem fornecedores cadastrados</h3>
    @endif --}}

    {{-- @unless ($fornecedores[0]['status'] === 'S') <!-- no if se o retorno da condição for verdadeiro ele executa, ja no unless se o retorno da condição for false ele executa -->
        Fornecedor inativo
    @endunless --}}



    {{-- o isset é usado para "ignorar" quando uma variavel ou paremetro não existe, continuando a executar caso não exista, ou seja, checa para ver se existe a variavel --}}
    @isset($fornecedores)
        Fornecedor: {{ $fornecedores[0]['nome'] }}
        <br>
        Status: {{ $fornecedores[0]['status'] }}
        <br>
        @isset($fornecedores[0]['cnpj'])
            CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @endisset
        <br>
    @endisset
</body>

</html>

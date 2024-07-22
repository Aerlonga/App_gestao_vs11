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

    {{-- @dd($fornecedores) '@dd' serve para exibir o array no blade.php --}}

    @if (count($fornecedores)> 0 && count($fornecedores) <= 5)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif (count($fornecedores) > 5)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não tem fornecedores cadastrados</h3>
    @endif
</body>

</html>

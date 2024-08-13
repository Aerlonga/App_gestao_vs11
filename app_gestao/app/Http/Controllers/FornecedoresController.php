<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '61',
                'telefone' => '00000-0000'
            ],

            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '62',
                'telefone' => '00000-0000'
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}


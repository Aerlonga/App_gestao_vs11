<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores()
    {
        $fornecedores = ['Fornecedor 1','Fornecedor 2','Fornecedor 3','Fornecedor 4','Fornecedor 5'];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
 
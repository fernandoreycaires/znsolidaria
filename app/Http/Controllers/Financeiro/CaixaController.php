<?php

namespace App\Http\Controllers\Financeiro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
    public function caixa()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.financeiro.caixa.index', compact('user'));
    }
}

<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrecadacaoController extends Controller
{
    public function arrecadacao()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.arrecadacoes.index', compact('user'));
    }
}

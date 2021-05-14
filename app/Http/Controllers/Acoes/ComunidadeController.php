<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComunidadeController extends Controller
{
    public function comunidade()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.comunidade.index', compact('user'));
    }
}

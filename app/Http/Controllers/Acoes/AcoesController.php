<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcoesController extends Controller
{
    public function dashboard()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.dashboard', compact('user'));
    }

    public function acoes()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.acoes.index', compact('user'));
    }
}

<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    public function familia()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.familia.index', compact('user'));
    }
}

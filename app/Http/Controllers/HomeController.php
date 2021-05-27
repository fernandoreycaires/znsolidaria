<?php

namespace App\Http\Controllers;

use App\Models\Acoes;
use App\Models\Comunidade;
use App\Models\Familia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }

    public function home()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidades = Comunidade::all()->count();
        $familias = Familia::all()->count();
        $acoes = Acoes::all()->count();
        
        return view('sistema.index', compact('user', 'comunidades', 'familias', 'acoes'));
    }
}

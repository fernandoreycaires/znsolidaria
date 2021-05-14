<?php

namespace App\Http\Controllers;

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

        return view('sistema.index', compact('user') );
    }
}

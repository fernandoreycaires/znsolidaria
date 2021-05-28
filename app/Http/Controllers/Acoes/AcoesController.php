<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use App\Models\Acoes;
use App\Models\AcoesLocal;
use App\Models\Comunidade;
use Illuminate\Http\Request;

class AcoesController extends Controller
{
    public function dashboard()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.dashboard', compact('user'));
    }

    //INDEX
    public function acoes()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $acoes = Acoes::all();
        $comunidades = Comunidade::all();

        return view('sistema.acoes.acoes.index', compact('user', 'acoes', 'comunidades'));
    }

    public function acoesAddView()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidades = Comunidade::all();

        return view('sistema.acoes.acoes.add', compact('user', 'comunidades'));
    }

    public function acoesAdd(Request $request)
    {
        $acao = new Acoes();
        $acao->comunidade = $request->comunidade;
        $acao->descricao = $request->descricao;
        $acao->dia = $request->agendamentoData;
        $acao->hora = $request->agendamentoHora;
        $acao->status = $request->status;
        $acao->save();

        $acaoId = Acoes::all()->last();

        $local = new AcoesLocal();
        $local->acao = $acaoId->id;
        $local->nome_local = $request->local;
        $local->rua = $request->endereco;
        $local->numero = $request->numero;
        $local->bairro = $request->bairro;
        $local->cep = $request->cep;
        $local->save();

        return redirect()->route('acoes.acoes');
    }

    public function acaoView(Acoes $acao)
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidade = $acao->comunidade()->first();

        return view('sistema.acoes.acoes.acao', compact('user', 'acao', 'comunidade'));
    }
}

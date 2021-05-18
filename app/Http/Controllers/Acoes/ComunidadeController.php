<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use App\Models\Comunidade;
use App\Models\ComunidadeEndereco;
use Illuminate\Http\Request;

class ComunidadeController extends Controller
{
    public function comunidade()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidades = Comunidade::all()->sortByDesc('id');
        $qtdcomunidades = Comunidade::all()->count();
        
        return view('sistema.acoes.comunidade.index', compact('user', 'qtdcomunidades' ,'comunidades'));
    }

    public function addView()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        return view('sistema.acoes.comunidade.add', compact('user'));
    }

    public function add(Request $request)
    {
        //INSERE VALOR NA TABELA COMUNIDADE
        $comunidade = new Comunidade();
        $comunidade->comunidade = $request->apelido;
        $comunidade->save();

        //BUSCA ULTIMO VALOR INSERIDO NA TABELA COMUNIDADE
        $buscaComunidade = Comunidade::all()->last();

        //INSERE ENDEREÇO REFERENCIA NA TABELA DE ENDEREÇO DA COMUNIDADE
        $endereco = new ComunidadeEndereco();
        $endereco->comunidade = $buscaComunidade->id; //Aqui insere ID buscado no comando acima
        $endereco->endereco = $request->endereco;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();

        return redirect()->route('acoes.comunidade.index');
    }
}

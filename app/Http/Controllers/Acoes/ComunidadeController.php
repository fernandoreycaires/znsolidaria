<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use App\Models\Comunidade;
use App\Models\ComunidadeEmailResponsavel;
use App\Models\ComunidadeEndereco;
use App\Models\ComunidadeResponsavel;
use App\Models\ComunidadeTelResponsavel;
use App\Models\Familia;
use App\Models\FamiliaEmail;
use App\Models\FamiliaEndereco;
use App\Models\FamiliaObservacao;
use App\Models\FamiliaTelefone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunidadeController extends Controller
{
    public function comunidade()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidades = Comunidade::all()->sortByDesc('id');
        $qtdcomunidades = Comunidade::all()->count();

        //Faz contagem na tabela familia da coluna comunidade
        //https://laravel.com/docs/8.x/collections    buscar por countBy()
        $qtdfamilias = Familia::all()->countBy('comunidade'); 
        
        return view('sistema.acoes.comunidade.index', compact('user', 'qtdcomunidades', 'qtdfamilias' ,'comunidades'));
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
    
    public function editEndereco(ComunidadeEndereco $endComunidadeID,  Request $request)
    {
        $endComunidadeID->mapa = $request->linkGoogle;
        $endComunidadeID->endereco = $request->enderecoComunidade;
        $endComunidadeID->bairro = $request->bairroComunidade;
        $endComunidadeID->cidade = $request->cidadeComunidade;
        $endComunidadeID->estado = $request->estadoComunidade;
        $endComunidadeID->save();

        return redirect()->route('acoes.comunidade.dados',['comunidadeID' => $endComunidadeID->comunidade ]);
    }

    public function addResponsavel(Request $request)
    {
        //INSERE VALOR NA TABELA COMUNIDADES_RESPONSAVEL
        $responsavel = new ComunidadeResponsavel();
        $responsavel->comunidade = $request->comunidade;
        $responsavel->nome = $request->nomeContato;
        $responsavel->save();

        //BUSCA ULTIMO VALOR INSERIDO NA TABELA COMUNIDADES_RESPONSAVEL
        $buscaResponsavel = ComunidadeResponsavel::all()->last();

        //INSERE TELEFONE NA TABELA COMUNIDADES_TELRESPONSAVEL
        $telResp = new ComunidadeTelResponsavel();
        $telResp->resp_comunidade = $buscaResponsavel->id; //Aqui insere ID buscado no comando acima
        $telResp->comunidade = $request->comunidade;
        $telResp->telefone = $request->telefoneContato;
        $telResp->save();

        //INSERE TELEFONE NA TABELA COMUNIDADES_TELRESPONSAVEL
        $emailResp = new ComunidadeEmailResponsavel();
        $emailResp->resp_comunidade = $buscaResponsavel->id; //Aqui insere ID buscado no comando acima
        $emailResp->comunidade = $request->comunidade;
        $emailResp->email = $request->emailContato;
        $emailResp->save();

        return redirect()->route('acoes.comunidade.dados',['comunidadeID' => $request->comunidade]);
    }

    public function apagarResponsavel(ComunidadeResponsavel $respComunidadeID)
    {
        $idComunidade = $respComunidadeID->comunidade;
        $respComunidadeID->delete();

        return redirect()->route('acoes.comunidade.dados',['comunidadeID' => $idComunidade]);
    }

    public function editObs(Comunidade $ComunidadeID, Request $request)
    {
        $ComunidadeID->observacao = $request->observacao;
        $ComunidadeID->save();

        return redirect()->route('acoes.comunidade.dados',['comunidadeID' => $ComunidadeID->id]);
    }

    public function dados(Comunidade $comunidadeID)
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $endereco = $comunidadeID->comunidade_endereco()->get();
        $responsaveis = $comunidadeID->comunidade_responsavel()->get();
        $telresponsaveis = $comunidadeID->comunidade_telresponsavel()->get();
        $emailresponsaveis = $comunidadeID->comunidade_emailresponsavel()->get();

        $familias = Familia::where('comunidade', $comunidadeID->id)->get();

        return view('sistema.acoes.comunidade.dados', compact('user','comunidadeID','endereco', 'responsaveis', 'telresponsaveis', 'emailresponsaveis', 'familias'));
    }
}

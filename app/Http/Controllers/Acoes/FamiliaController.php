<?php

namespace App\Http\Controllers\Acoes;

use App\Http\Controllers\Controller;
use App\Models\AcaoFamiliaCadastrada;
use App\Models\Acoes;
use App\Models\Comunidade;
use App\Models\Familia;
use App\Models\FamiliaEmail;
use App\Models\FamiliaEndereco;
use App\Models\FamiliaObservacao;
use App\Models\FamiliaTelefone;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    public function familia(Request $request)
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        //dd($request);

        $buscas = Familia::where('cpf', $request->cpf)->get();
        $classe = 'none';
        if ($request->cpf != "") {
            $classe = 'block';
        }

        $familias = Familia::all();
        $comunidades = Comunidade::all();
        $emails = FamiliaEmail::all();
        $enderecos = FamiliaEndereco::all();
        $telefones = FamiliaTelefone::all();
        $observacoes = FamiliaObservacao::all();

        return view('sistema.acoes.familia.index', compact('user','familias','comunidades','emails','enderecos','telefones','observacoes','classe','buscas'));
    }

    public function familiaAddView()
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $comunidades = Comunidade::all();

        return view('sistema.acoes.familia.add', compact('user', 'comunidades'));
    }

    public function familiaAdd(Request $request)
    {
        $familiaAdd = new Familia();
        $familiaAdd->comunidade = $request->comunidade;
        $familiaAdd->nome = $request->nome;
        $familiaAdd->nascimento = $request->nascimento;
        $familiaAdd->cpf = $request->cpf;
        $familiaAdd->rg = $request->rg;
        $familiaAdd->estado_civil = $request->estado_civil;
        $familiaAdd->save();

        $familia = Familia::all()->last(); //BUSCA O ULTIMO REGISTRO NA TABELAFAMILIA

        $telefone = new FamiliaTelefone();
        $telefone->familia = $familia->id;
        $telefone->telefone = $request->telefone;
        $telefone->save();

        $email = new FamiliaEmail();
        $email->familia = $familia->id;
        $email->email = $request->email;
        $email->save();

        $endereco = new FamiliaEndereco();
        $endereco->familia = $familia->id;
        $endereco->logradouro = $request->endereco;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();

        $observacao = new FamiliaObservacao();
        $observacao->familia = $familia->id;
        $observacao->observacao = $request->observacao;
        $observacao->save();
        

        return redirect()->route('acoes.familia.index');
    }

    public function familiaEdit(Familia $perfil, Request $request)
    {
        $perfil->comunidade = $request->comunidade;
        $perfil->nome = $request->nome;
        $perfil->nascimento = $request->nascimento;
        $perfil->cpf = $request->cpf;
        $perfil->rg = $request->rg;
        $perfil->estado_civil = $request->estado_civil;
        $perfil->save();

        $telefone = FamiliaTelefone::where('familia', $perfil->id )->first();
        $telefone->telefone = $request->telefone;
        $telefone->save();

        $email = FamiliaEmail::where('familia', $perfil->id )->first();
        $email->email = $request->email;
        $email->save();

        $endereco = FamiliaEndereco::where('familia', $perfil->id )->first();
        $endereco->logradouro = $request->endereco;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->save();

        $observacao = FamiliaObservacao::where('familia', $perfil->id )->first();
        $observacao->observacao = $request->observacao;
        $observacao->save();
        

        return redirect()->route('acoes.familia.PerfilView',['perfil'=>$perfil->id]);
    }

    public function familiaPerfilView(Familia $perfil)
    {
        $user = Auth()->user() ; //Pega os dados do Usuario logado

        $endereco = $perfil->familia_endereco()->first();
        $telefone = $perfil->familia_telefone()->first();
        $email = $perfil->familia_email()->first();
        $observacao = $perfil->familia_observacao()->first();

        $comunidades = Comunidade::all();

        $acoes = Acoes::all()->sortByDesc('dia');
        $acoesRegistrada = AcaoFamiliaCadastrada::where('familia', $perfil->id)->get();

        return view('sistema.acoes.familia.perfil', compact('user', 'perfil', 'endereco', 'telefone', 'email','observacao','comunidades', 'acoes', 'acoesRegistrada'));
    }
}

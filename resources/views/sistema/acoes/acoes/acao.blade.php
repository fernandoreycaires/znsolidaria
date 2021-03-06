@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
 
  <div class="clearfix"></div>
  
  <div class="row">


    <div class="col-md-3 col-sm-3 ">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2><a href="{{route('acoes.acoes')}}"><i class="fa fa-chevron-left"></i></a> Dia</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <?php 
            $data = strtotime($acao->dia); 
            $dia = date('d',$data);
            $mes = date('M',$data);
            $ano = date('Y',$data);

          ?>
          <p style="font-size: 100pt">{{$dia}} </p>
          <p style="font-size: 20pt">{{$mes}} / {{$ano}}</p>

        </div>
      </div>
    </div>

    <div class="col-md-5 col-sm-5 ">
      <div class="x_panel tile fixed_height_320 overflow_hidden">
        <div class="x_title">
          <h2>{{$comunidade->comunidade}} &nbsp; <a href="{{route('acoes.comunidade.dados',['comunidadeID' => $comunidade->id ])}}"><i class="fa fa-eye text-success"></i></a></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p>Dados do Local da Ação &nbsp; <button class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#editDados"><i class="fa fa-pencil-square-o"></i></button></p>
          <p><i class="fa fa-home"></i>&nbsp; {{$acao_local->nome_local}} </p>
          <p><i class="fa fa-map-marker"></i>&nbsp; {{$acao_local->rua}},{{$acao_local->numero}} - {{$acao_local->bairro}} | {{$acao_local->cep}}</p>
          <p><iframe src="{{$acao_local->mapa}}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  </p>
          <!-- Modal Edição -->
          <div class="modal fade" id="editDados" tabindex="-1" aria-labelledby="editDadosLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <form action="{{route('acoes.acoes.acaoEditLocal',['acaoLocal'=>$acao_local->id])}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="modal-header">
                    <h5 class="modal-title" id="editDadosLabel">Editar Dados do Local</h5>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3 row">
                      <label for="nomeLugar" class="col-sm-2 col-form-label">Nome do Local</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nomeLugar" name="nomeLugar" placeholder="Nome do lugar da Ação" value="{{$acao_local->nome_local}}" >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="ruaLugar" class="col-sm-2 col-form-label">Rua</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="ruaLugar" name="ruaLugar" value="{{$acao_local->rua}}" >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="numeroLugar" class="col-sm-2 col-form-label">Número</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="numeroLugar" name="numeroLugar" value="{{$acao_local->numero}}" >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="bairroLugar" class="col-sm-2 col-form-label">Bairro</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="bairroLugar" name="bairroLugar" value="{{$acao_local->bairro}}" >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="cepLugar" class="col-sm-2 col-form-label">CEP</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="cepLugar" name="cepLugar" value="{{$acao_local->cep}}"  >
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="mapaLugar" class="col-sm-2 col-form-label">Mapa</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="mapaLugar" name="mapaLugar" value="{{$acao_local->mapa}}"  >
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ./ Janela Modal-->
        </div>
      </div>
    </div>


    <div class="col-md-4 col-sm-4 ">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Doações</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">
            <ul class="quick-list">
              <li><i class="fa fa-calendar-o"></i><a href="#">Arrecadados</a></li>
              <li><i class="fa fa-users"></i><a href="#">Familias Registradas</a></li>
            </ul>

            <div class="sidebar-widget">
                <h4>Arrecadações</h4>
                <!--Configuração desse grafico está em /LAYOUT/JAVASCRIPT-->
                <canvas width="150" height="80" id="chart_gauge_doacao" class="" style="width: 160px; height: 100px;"></canvas>
                <div class="goal-wrapper">
                  <span id="gauge-text" class="gauge-value pull-left">0</span>
                  <span class="gauge-value pull-left">%</span>
                  <span id="goal-text" class="goal-value pull-right">100%</span>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-md-4 col-sm-4 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Responsáveis <small>nesta comunidade</small></h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">
            @foreach ($responsaveis as $responsavel)
            <p><i class="fa fa-user"></i>&nbsp; {{$responsavel->nome}}</p>
              <!--telefone do responsavel-->              
              @foreach ($responsaveisTel as $responsavelTel)
                @if ($responsavelTel->resp_comunidade == $responsavel->id)
                  <p><i class="fa fa-phone"></i>&nbsp; {{$responsavelTel->telefone}}</p>
                @endif
              @endforeach
            <hr>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8 col-sm-8 ">

      <div class="row">

        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Familias Registradas nesta Ação</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="dashboard-widget-content">
                <div class="col-md-6 hidden-small">
                  Familias Registradas <button class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#familiaRegistrada"><i class="fa fa-plus"></i></button>
                  <hr>
                  @foreach ($listarFamilias as $listar)
                    @foreach ($familiaCadastrada as $fc)
                        @if ($fc->familia == $listar->id)
                          <?php
                            if ($fc->presenca == "Faltou") {
                              $cor = "danger";
                            }else {
                              $cor = "success";
                            }
                          ?>
                          <div class="alert alert-{{$cor}} alert-dismissible">
                            <p><strong>Nome: </strong>{{$listar->nome}}</p>
                            <p><strong>CPF: </strong>{{$listar->cpf}} | <strong>RG: </strong>{{$listar->rg}}</p>
                            <form action="{{route('acoes.acoes.presenciou',['acaoFamCad'=>$fc->id])}} " method="post">
                              @csrf
                              @method('PUT')
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"> Presente </i></button>
                                <input type="hidden" name="presenciou" value="Presenciou">
                            </form>
                          </div>
                        @endif
                    @endforeach
                  @endforeach
                </div>
                <div class="col-md-6 hidden-small">
                  Familias que participaram sem registro <button class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#familiaNaoRegistrada"><i class="fa fa-pencil-square-o"></i></button>
                  <hr>
                  @foreach ($familiaNaoCadastrada as $fnc)
                    <div class="alert alert-info alert-dismissible">
                      <p><strong>Nome: </strong>{{$fnc->nome}}</p>
                      <p><strong>CPF: </strong>{{$fnc->cpf}} | <strong>RG: </strong>{{$fnc->rg}}</p>
                      <p><strong>Telefone: </strong>{{$fnc->telefone}}</p>
                    </div>
                  @endforeach
                </div>

                  <!-- Modal Familias Registradas -->
                  <div class="modal fade" id="familiaRegistrada" tabindex="-1" aria-labelledby="familiaRegistradaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">
                        <form action="{{route('acoes.acoes.familiaComRegistroAdd')}}" method="post">
                          @csrf
                          <!--Valor da Ação nesse caso sempre será o mesmo-->
                          <input type="hidden" name="acao" value="{{$acao_local->id}}"> 
                          
                          <div class="modal-header">
                            <h5 class="modal-title" id="familiaRegistradaLabel">Selecione para inserir a Familia</h5>
                          </div>
                          <div class="modal-body">
                            <ul class="to_do">

                              @foreach ($listarFamilias as $listar)
                                <li>
                                  <label for="{{$listar->id}}">
                                    <p><input type="checkbox" class="flat" name="familias[]" id="{{$listar->id}}" value="{{$listar->id}}"> {{$listar->nome}} </p>
                                    <p><strong>CPF:</strong> {{$listar->cpf}} | <strong>RG:</strong> {{$listar->rg}} </p>
                                  </label>
                                </li>
                              @endforeach
                            
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- ./ Janela Modal Familias Registradas-->

                  <!-- Modal Familias Não Registradas -->
                  <div class="modal fade" id="familiaNaoRegistrada" tabindex="-1" aria-labelledby="familiaNaoRegistradaLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">
                        <form action="{{route('acoes.acoes.familiaSemRegistroAdd')}}" method="post">
                          @csrf
                          <input type="hidden" name="acao" value="{{$acao_local->id}}">
                          <div class="modal-header">
                            <h5 class="modal-title" id="familiaNaoRegistradaLabel">Dados do representante da familia </h5>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3 row">
                              <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Sómente números">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="rg" class="col-sm-2 col-form-label">RG</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="rg" name="rg" placeholder="Sómente números">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="telefone" class="col-sm-2 col-form-label">Telefone</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Sómente números com o DDD">
                              </div>
                            </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- ./ Janela Modal Familias Não Registradas-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
    


@endsection
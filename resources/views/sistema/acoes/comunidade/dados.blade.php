@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2><a href="{{route('acoes.comunidade.index')}}"><i class="fa fa-chevron-left"></i></a> {{$comunidadeID->comunidade}}<small>- Dados da Comunidade <button type="button" class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#editarApelido"><i class="fa fa-edit m-right-xs"></i></button></small></h2>
              <!--Janela Modal referente à edição do Apelido da comunidade-->
                  <!-- Modal -->
                  <div class="modal fade" id="editarApelido" tabindex="-1" aria-labelledby="editarApelidoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editarApelidoLabel">Editar Apelido da Comunidade</h5>
                        </div>
                        <form action="{{route('acoes.comunidade.editApelido', ['ComunidadeID' => $comunidadeID->id])}}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="modal-body">
                            <div class="mb-3 row">
                              <label for="comunidade" class="col-sm-2 col-form-label">Comunidade</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="comunidade" name="comunidade" value="{{$comunidadeID->comunidade}}">
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

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="col-md-3 col-sm-3  profile_left">
                <!-- Endereço da comunidade -->
                <div class="profile_img">

                  @foreach ($endereco as $end)
                  <div id="crop-avatar">
                    <!-- Endereço da comunidade -->
                    <ul class="list-unstyled user_data">
                      <li><i class="fa fa-map-marker user-profile-icon"></i> {{$end->endereco}}, {{$end->bairro}} - {{$end->estado}}
                      </li>
                    </ul>
                  </div>
                  <div id="crop-avatar">
                    <!-- Mapa -->
                    <iframe src="{{$end->mapa}}" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <br>
                  <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editarEndereco"><i class="fa fa-edit m-right-xs"></i> Editar Endereço </button>

                  <!--Janela Modal referente ao endereço da comunidade-->
                  <!-- Modal -->
                  <div class="modal fade" id="editarEndereco" tabindex="-1" aria-labelledby="editarEnderecoLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editarEnderecoLabel">Editar Endereço da Comunidade</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('acoes.comunidade.editEndereco', ['endComunidadeID' => $end->id])}}" method="post">
                          @csrf
                          @method('PUT')
                          <div class="modal-body">
                            <div class="mb-3 row">
                              <label for="nomeContato" class="col-sm-2 col-form-label">Link do Google Maps</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="linkGoogle" name="linkGoogle" value="{{$end->mapa}}">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="telefoneContato" class="col-sm-2 col-form-label">Endereço</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="enderecoComunidade" name="enderecoComunidade" value="{{$end->endereco}}" placeholder="Rua Teste, 567" >
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="telefoneContato" class="col-sm-2 col-form-label">Bairro</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="bairroComunidade" name="bairroComunidade" value="{{$end->bairro}}">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="telefoneContato" class="col-sm-2 col-form-label">Cidade</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="cidadeComunidade" name="cidadeComunidade" value="{{$end->cidade}}">
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="telefoneContato" class="col-sm-2 col-form-label">Estado</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="estadoComunidade" name="estadoComunidade" value="{{$end->estado}}">
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
                  @endforeach

                </div>
                <!-- ./ Endereço da comunidade -->

                <hr>
                <!-- Contato da comunidade -->

                <h3>Contatos <button type="button" class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#addContato"><i class="fa fa-plus"></i></button></h3> 

                <!--Janela Modal referente Adicionar novo Contato-->
                <!-- Modal -->
                <div class="modal fade" id="addContato" tabindex="-1" aria-labelledby="addContatoLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <form action="{{route('acoes.comunidade.addResponsavel')}} " method="post">
                        @csrf
                        <input type="hidden" name="comunidade" value="{{$comunidadeID->id}}">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addContatoLabel">Adicionar Contato</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="mb-3 row">
                            <label for="nomeContato" class="col-sm-2 col-form-label">Nome do Contato</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nomeContato" name="nomeContato" placeholder="Nome Completo" >
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="telefoneContato" class="col-sm-2 col-form-label">Telefone</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="telefoneContato" name="telefoneContato" placeholder="Somente numeros com o DDD" >
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="emailContato" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="mail" class="form-control" id="emailContato" name="emailContato" placeholder="exemplo@exemplo.com" >
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
                <!-- ./ Adicionar novo Contato da comunidade -->

                <!-- Listando os Contatos da comunidade -->
                @foreach ($responsaveis as $responsavel)
                <ul class="list-unstyled user_data">
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> {{$responsavel->nome}}
                    <!-- Botão para remover contato--> 
                    <a href="#" class="btn btn-sm text-danger" onclick="event.preventDefault; document.getElementById('delete-form{{$responsavel->id}}').submit();"><i class="fa fa-minus"></i></a>
                      <form id="delete-form{{$responsavel->id}}" action="{{ route('acoes.comunidade.apagarResponsavel', ['respComunidadeID' => $responsavel->id]) }}" method="POST" style="display: none">
                        @csrf
                        @method('DELETE')
                      </form>
                  </li>

                  @foreach ($telresponsaveis as $telresponsavel)
                    @if ($telresponsavel->resp_comunidade == $responsavel->id)
                    <li class="m-top-xs">
                      <i class="fa fa-phone user-profile-icon"></i> +55 {{$telresponsavel->telefone}}
                    </li>    
                    @endif
                  @endforeach
                  
                  @foreach ($emailresponsaveis as $emailresponsavel)
                    @if ($emailresponsavel->resp_comunidade == $responsavel->id)
                      <li class="m-top-xs">
                        <i class="fa fa-envelope-o user-profile-icon"></i> {{$emailresponsavel->email}}
                      </li>    
                    @endif
                  @endforeach
                  
                </ul>  
                @endforeach
                <!-- Fim da Lista dos Contatos da comunidade -->
                <hr>
                <br>

              </div>
              <div class="col-md-9 col-sm-9 ">
                <!-- start of user-activity-graph 
                <div id="graph_bar" style="width:100%; height:280px;"></div>-->
                  <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Atividades feitas na comunidade <small>em {{ date('Y') }} </small></h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <canvas id="mybarChart"></canvas>
                      </div>
                    </div>
                  <!-- </div>
                 end of user-activity-graph -->

                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Ações</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Familias Cadastradas</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Observação</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                      <!-- start açoes -->
                      <ul class="messages">
                        @foreach ($acoes as $acao)
                          <?php $data = strtotime($acao->dia); 
                                $dia = date('d',$data);
                                $mes = date('M',$data);
                                $ano = date('Y',$data);
                          ?>
                          <li>
                            <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                            <div class="message_date">
                              <h3 class="date text-info">{{ $dia }}</h3>
                              <p class="month">{{$mes}} / {{$ano}} </p>
                            </div>
                            <div class="message_wrapper">
                              <h4 class="heading">{{$comunidadeID->comunidade}} </h4>
                              <blockquote class="message">{{$acao->descricao}} </blockquote>
                              <br>
                              <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="{{route('acoes.acoes.acaoView',['acao'=>$acao->id])}} "><i class="fa fa-eye"></i> Visualizar Ação</a>
                              </p>
                            </div>
                        </li>
                        @endforeach
                      </ul>
                      <!-- end ações-->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                      <!-- start user projects -->
                      <table class="data table table-striped no-margin">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>Visualizar</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($familias as $familia)
                          <tr>
                            <td>{{$familia->id}} </td>
                            <td>{{$familia->nome}} </td>
                            <td>{{$familia->cpf}} </td>
                            <td>{{$familia->rg}} </td>
                            <td class="vertical-align-mid">
                                <a href="{{route('acoes.familia.PerfilView',['perfil' => $familia->id])}}" ><i class="fa fa-eye text-success"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <!-- end user projects -->

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                      <p><button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#observacaoEdit"><i class="fa fa-eye text-success"></i></button></p>
                      <p>{{$comunidadeID->observacao}}</p>

                      <!--Janela Modal referente Observações-->
                      <!-- Modal -->
                      <div class="modal fade" id="observacaoEdit" tabindex="-1" aria-labelledby="addContatoLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content">
                            <form action="{{route('acoes.comunidade.editObs', ['ComunidadeID' => $comunidadeID->id])}}" method="post">
                              @csrf
                              @method('PUT')
                              <div class="modal-header">
                                <h5 class="modal-title" id="addContatoLabel">Observação</h5>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3 row">
                                  <div class="col-sm-10">
                                    <textarea class="form-control" id="observacao" name="observacao" placeholder="Descreva um breve observação sobre esta comunidade" >{{$comunidadeID->observacao}}</textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- /page content -->
    

<!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
@endsection
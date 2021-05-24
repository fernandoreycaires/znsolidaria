@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Perfil </h3>
      </div>
    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">

          <div class="x_content">
            <div class="col-md-3 col-sm-3  profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="{{asset('theme_lib/production/images/user.png')}} " alt="Avatar" title="Change the avatar">
                </div>
              </div>
              <h3>{{$perfil->nome}}</h3>

              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> {{$endereco->logradouro}}, {{$endereco->numero}} 
                  <br> {{$endereco->bairro}}
                  <br> {{$endereco->cidade}} - {{$endereco->estado}}
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-phone user-profile-icon"></i> +55 {{$telefone->telefone}}
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-envelope-o user-profile-icon"></i> {{$email->email}}
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-user user-profile-icon"></i> RG: {{$perfil->rg}}
                </li>
                <li class="m-top-xs">
                  <i class="fa fa-user user-profile-icon"></i> CPF: {{$perfil->cpf}}
                </li>
                <li class="m-top-xs">
                  <i class="fa fa-book user-profile-icon"></i> Observação: {{$observacao->observacao}}
                </li>
              </ul>
              
              <!-- Editar dados -->
              <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editPerfil"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</button>

              <!--Janela Modal referente Editar Perfil-->
              <!-- Modal -->
              <div class="modal fade" id="editPerfil" tabindex="-1" aria-labelledby="editPerfilLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <form action="{{route('acoes.familia.PerfilEdit',['perfil'=>$perfil->id])}} " method="post">
                      @csrf
                      @method('PUT')
                      <div class="modal-header">
                        <h5 class="modal-title" id="editPerfilLabel">Editar Dados</h5>
                      </div>
                      <div class="modal-body">
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align ">Comunidade </label><span class="required">*</span>
                          <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="comunidade">
                              <option value="{{$perfil->comunidade}}">Selecione ...</option>
                              @foreach ($comunidades as $comunidade)
                                <option value="{{$comunidade->id}}">{{$comunidade->comunidade}} </option>
                              @endforeach
                            </select>
                          </div>
                        </div>
          
                        <hr>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nome">Nome: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="nome" name="nome" required="required" class="form-control" placeholder="Nome completo" value="{{$perfil->nome}}">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="nascimento">Data de Nascimento: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="nascimento" name="nascimento" value="{{$perfil->nascimento}}" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                            <script>
                              function timeFunctionLong(input) {
                                setTimeout(function() {
                                  input.type = 'text';
                                }, 60000);
                              }
                            </script>
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="cpf">CPF: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="cpf" name="cpf" required="required" class="form-control" value="{{$perfil->cpf}}" placeholder="Somente números">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="rg">RG: 
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="rg" name="rg" class="form-control" value="{{$perfil->rg}}" placeholder="Somente números">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="estado_civil">Estado Civil: <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="estado_civil" name="estado_civil" value="{{$perfil->estado_civil}}" class="form-control">
                          </div>
                        </div>
                        
                        <hr>
          
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="telefone">Telefone <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="number" id="telefone" name="telefone" required="required" class="form-control" value="{{$telefone->telefone}}" placeholder="Somente numeros com o DDD" >
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="email" name="email" value="{{$email->email}}" class="form-control">
                          </div>
                        </div>
          
                        <hr>
                        
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="endereco">Endereço <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="endereco" name="endereco" required="required" value="{{$endereco->logradouro}}" class="form-control">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Número <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="numero" name="numero" value="{{$endereco->numero}}" required="required" class="form-control">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="bairro" class="col-form-label col-md-3 col-sm-3 label-align">Bairro <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="bairro" class="form-control" type="text" name="bairro" value="{{$endereco->bairro}}" required="required">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="cidade" class="col-form-label col-md-3 col-sm-3 label-align">Cidade <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="cidade" class="form-control" type="text" name="cidade" value="{{$endereco->cidade}}" required="required">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="estado" class="col-form-label col-md-3 col-sm-3 label-align">Estado <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="estado" class="form-control" type="text" name="estado" value="{{$endereco->estado}}" required="required">
                          </div>
                        </div>
          
                        <hr>
          
                        <div class="item form-group">
                          <label for="observacao" class="col-form-label col-md-3 col-sm-3 label-align">Observação
                          </label>
                          <div class="col-md-6 col-sm-6">
                            <textarea id="observacao" class="form-control" name="observacao" placeholder="Breve observação ou nada a declarar">{{$observacao->observacao}}</textarea>
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
              <br />
            </div>
            
            <div class="col-md-9 col-sm-9 ">
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
                    <h3>Ações</h3>
                    <!-- start recent activity -->
                    <ul class="messages">
                      <li>
                        <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-info">24</h3>
                          <p class="month">May</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Desmond Davison</h4>
                          <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                          </p>
                        </div>
                      </li>
                      <li>
                        <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-error">21</h3>
                          <p class="month">May</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Brian Michaels</h4>
                          <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                            <a href="#" data-original-title="">Download</a>
                          </p>
                        </div>
                      </li>
                      <li>
                        <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-info">24</h3>
                          <p class="month">May</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Desmond Davison</h4>
                          <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                            <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                          </p>
                        </div>
                      </li>
                      <li>
                        <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-error">21</h3>
                          <p class="month">May</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Brian Michaels</h4>
                          <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                            <a href="#" data-original-title="">Download</a>
                          </p>
                        </div>
                      </li>

                    </ul>
                    <!-- end recent activity -->
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
    


@endsection
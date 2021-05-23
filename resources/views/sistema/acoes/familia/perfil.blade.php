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
              </ul>

              <button type="button" class="btn btn-sm btn-success"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</button>
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
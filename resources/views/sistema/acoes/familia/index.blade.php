@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Cadastro de Familias</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Procurar por CPF ">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="x_panel">
          <div class="x_content">
              <div class="col-md-12 col-sm-12  text-center">
                <!--Não remover essa div-->
              </div>

              <div class="clearfix"></div>
              
              <!-- CARTÕES -->

              <div class="col-md-4 col-sm-4  profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    <h4 class="brief"><i>Comunidade</i></h4>
                    <div class="left col-md-7 col-sm-7">
                      <h2>Nome da Pessoa</h2>
                      <p><strong>Observação: </strong> Sei lá, alguma coisa relevante ou nada a declarar </p>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i><strong> Endereço:</strong></li> Rua Testando Passiencia Junior, 35
                        <li><i class="fa fa-phone"></i><strong> Telefone:</strong></li> +55 (11) 9 9999-9999
                      </ul>
                    </div>
                    <div class="right col-md-5 col-sm-5 text-center">
                      <img src="{{asset('theme_lib/production/images/user.png')}}" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                  <div class=" profile-bottom text-center">
                    
                    <div class=" col-sm-12 emphasis">
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-user"> </i> Ver Perfil
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- ./ CARTÕES -->
              
          </div>
        </div>
    </div>
  </div>
</div>
<!-- /page content -->
    


@endsection
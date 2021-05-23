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
            <a href="{{route('acoes.familia.addView')}}" class="btn btn-default btn-success" >Novo <i class="fa fa-plus"></i></a>
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
              @foreach ($familias as $familia)
              <div class="col-md-4 col-sm-4  profile_details">
                <div class="well profile_view">
                  <div class="col-sm-12">
                    @foreach ($comunidades as $comunidade)
                      @if ($familia->comunidade == $comunidade->id)
                        <h4 class="brief"><i>Comunidade: {{$comunidade->comunidade}} </i></h4>
                      @endif
                    @endforeach
                    <div class="left col-md-7 col-sm-7">
                      <h2>{{$familia->nome}} </h2>
                      @foreach ($observacoes as $observacao)
                        @if ($observacao->familia == $familia->id)
                          <p><strong>Observação: </strong> {{$observacao->observacao}} </p>
                        @endif
                      @endforeach
                      <ul class="list-unstyled">
                        @foreach ($enderecos as $endereco)
                          @if ($endereco->familia == $familia->id)
                            <li><i class="fa fa-building"></i><strong> Endereço:</strong></li> {{$endereco->logradouro}}, {{$endereco->numero }} 
                          @endif
                        @endforeach
                        @foreach ($telefones as $telefone)
                            @if ($telefone->familia == $familia->id)
                              <li><i class="fa fa-phone"></i><strong> Telefone:</strong></li> +55 {{$telefone->telefone}}
                            @endif
                        @endforeach
                      </ul>
                    </div>
                    <div class="right col-md-5 col-sm-5 text-center">
                      <img src="{{asset('theme_lib/production/images/user.png')}}" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                  <div class=" profile-bottom text-center">
                    
                    <div class=" col-sm-12 emphasis">
                      <a href="{{route('acoes.familia.PerfilView',['perfil' => $familia->id])}}" class="btn btn-primary btn-sm">
                        <i class="fa fa-user"> </i> Ver Perfil
                      </a>
                    </div>
                  </div>
                </div>
              </div>    
              @endforeach
              <!-- ./ CARTÕES -->
              
          </div>
        </div>
    </div>
  </div>
</div>
<!-- /page content -->
    


@endsection
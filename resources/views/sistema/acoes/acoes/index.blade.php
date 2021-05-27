@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Ações</h3>
        </div>

        <div class="title_right">
          <div class="col-md-3 col-sm-3 form-group pull-right top_search">
            <div class="input-group">
                <a href="{{route('acoes.acoes.addView')}}" class="btn btn-success"><i class="fa fa-plus btn-success"></i> Criar Novo Evento</a>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">
              <!-- start recent activity -->
              <ul class="messages">
                @foreach ($acoes as $acao)
                  <?php $data = strtotime($acao->dia); ?>
                  <?php $dia = date('d',$data);
                        $mes = date('M',$data);
                  ?>
                  <li>
                    <img src="{{asset('image/fotos/painel1.jpg')}}" class="avatar" alt="Avatar">
                    <div class="message_date">
                      <h3 class="date text-info">{{ $dia }}</h3>
                      <p class="month">{{$mes}} </p>
                    </div>
                    <div class="message_wrapper">
                      @foreach ($comunidades as $comunidade)
                        @if ($comunidade->id == $acao->comunidade)
                          <h4 class="heading">{{$comunidade->comunidade}} </h4>
                        @endif    
                      @endforeach
                      <blockquote class="message">{{$acao->descricao}} </blockquote>
                      <br>
                      <p class="url">
                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                        <a href="#"><i class="fa fa-eye"></i> Visualizar Ação</a>
                      </p>
                    </div>
                </li>
                @endforeach
              </ul>
              <!-- end recent activity -->
            </div>
          </div>
      </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        
            
        
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->
    


@endsection
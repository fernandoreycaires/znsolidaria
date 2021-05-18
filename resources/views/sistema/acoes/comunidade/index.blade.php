@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Comunidades</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="col-md-6 col-sm-6">
        <div class="x_panel">
          <div class="x_title">
            <h2><small>Comunidades cadastradas </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a href="{{route('acoes.comunidade.addView')}}" ><i class="fa fa-plus text-success"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Comunidade</th>
                  <th>Familias</th>
                  <th>Visualizar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($comunidades as $comunidade)
                <tr>
                  <th scope="row">{{$comunidade->id}}</th>
                  <td>{{$comunidade->comunidade}} </td>
                  <td>325</td>
                  <td><a href="{{route('acoes.comunidade.dados',['comunidadeID' => $comunidade->id ])}}"><i class="fa fa-eye text-success"></i></a></td>
                </tr>    
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
      </div>
      
      <div class="col-md-6 col-sm-6">
        
          <div class="x_content">
            <div class="animated flipInY">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-users"></i>
                </div>
                <div class="count">{{$qtdcomunidades}} </div>

                <h3>Comunidades</h3>
                <p>Comunidades em assistencia.</p>
              </div>
            </div>
          </div>
        
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
        
            
        
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->
    


@endsection
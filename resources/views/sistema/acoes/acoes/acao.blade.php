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
          <h2>{{$comunidade->comunidade}} </h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p>Dados do Local da Ação &nbsp; <button class="btn btn-sm text-success" data-bs-toggle="modal" data-bs-target="#editDados"><i class="fa fa-pencil-square-o"></i></button></p>
          <p><i class="fa fa-home"></i> {{$acao_local->nome_local}} </p>
          <p><i class="fa fa-map-marker"></i> {{$acao_local->rua}},{{$acao_local->numero}} - {{$acao_local->bairro}} | {{$acao_local->cep}}</p>
          <p><iframe src="{{$acao_local->mapa}}" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  </p>
          <!-- Modal Edição -->
          <div class="modal fade" id="editDados" tabindex="-1" aria-labelledby="addContatoLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <form action="{{route('acoes.acoes.acaoEditLocal',['acaoLocal'=>$acao_local->id])}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="modal-header">
                    <h5 class="modal-title" id="addContatoLabel">Editar Dados do Local</h5>
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
              <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
              </li>
              <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
              </li>
              <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
              <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
              </li>
              <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
              <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
              </li>
              <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
              </li>
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
          <h2>Recent Activities <small>Sessions</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Settings 1</a>
                  <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="dashboard-widget-content">

            <ul class="list-unstyled timeline widget">
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                  </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                  </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                  </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="block">
                  <div class="block_content">
                    <h2 class="title">
                                      <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                  </h2>
                    <div class="byline">
                      <span>13 hours ago</span> by <a>Jane Smith</a>
                    </div>
                    <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-8 col-sm-8 ">



      <div class="row">

        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Visitors location <small>geo-presentation</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="dashboard-widget-content">
                <div class="col-md-4 hidden-small">
                  <h2 class="line_30">125.7k Views from 60 countries</h2>

                  <table class="countries_list">
                    <tbody>
                      <tr>
                        <td>United States</td>
                        <td class="fs15 fw700 text-right">33%</td>
                      </tr>
                      <tr>
                        <td>France</td>
                        <td class="fs15 fw700 text-right">27%</td>
                      </tr>
                      <tr>
                        <td>Germany</td>
                        <td class="fs15 fw700 text-right">16%</td>
                      </tr>
                      <tr>
                        <td>Spain</td>
                        <td class="fs15 fw700 text-right">11%</td>
                      </tr>
                      <tr>
                        <td>Britain</td>
                        <td class="fs15 fw700 text-right">10%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div id="world-map-gdp" class="col-md-8 col-sm-12 " style="height:230px;"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row">


        <!-- Start to do list -->
        <div class="col-md-6 col-sm-6 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>To Do List <small>Sample tasks</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div class="">
                <ul class="to_do">
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Create email address for new intern</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Create email address for new intern</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                  </li>
                  <li>
                    <p>
                      <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End to do list -->
        
        <!-- start of weather widget -->
        <div class="col-md-6 col-sm-6 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Daily active users <small>Sessions</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="temperature"><b>Monday</b>, 07:30 AM
                    <span>F</span>
                    <span><b>C</b></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="weather-icon">
                    <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="weather-text">
                    <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="weather-text pull-right">
                  <h3 class="degrees">23</h3>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="row weather-days">
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Mon</h2>
                    <h3 class="degrees">25</h3>
                    <canvas id="clear-day" width="32" height="32"></canvas>
                    <h5>15 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Tue</h2>
                    <h3 class="degrees">25</h3>
                    <canvas height="32" width="32" id="rain"></canvas>
                    <h5>12 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Wed</h2>
                    <h3 class="degrees">27</h3>
                    <canvas height="32" width="32" id="snow"></canvas>
                    <h5>14 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Thu</h2>
                    <h3 class="degrees">28</h3>
                    <canvas height="32" width="32" id="sleet"></canvas>
                    <h5>15 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Fri</h2>
                    <h3 class="degrees">28</h3>
                    <canvas height="32" width="32" id="wind"></canvas>
                    <h5>11 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="daily-weather">
                    <h2 class="day">Sat</h2>
                    <h3 class="degrees">26</h3>
                    <canvas height="32" width="32" id="cloudy"></canvas>
                    <h5>10 <i>km/h</i></h5>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

        </div>
        <!-- end of weather widget -->
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
    


@endsection
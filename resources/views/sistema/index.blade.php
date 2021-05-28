@extends('sistema/layout/index')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Home</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="">
            <div class="x_content">
              <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-user"></i>
                    </div>
                    <div class="count">{{$familias}}</div>

                    <h3>Familias</h3>
                    <p>Pessoas sendo assistidas.</p>
                  </div>
                </div>

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i>
                    </div>
                    <div class="count">{{$comunidades}}</div>

                    <h3>Comunidades</h3>
                    <p>Comunidades em assistencia.</p>
                  </div>
                </div>
                
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-book"></i>
                    </div>
                    <div class="count">{{$acoes}} </div>

                    <h3>Ações</h3>
                    <p>Ações programadas e realizadas por este projeto.</p>
                  </div>
                </div>

                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o"></i>
                    </div>
                    <div class="count">0</div>

                    <h3>Realizadas</h3>
                    <p>Açoes realizadas este ano.</p>
                  </div>
                </div>
              </div>
              
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
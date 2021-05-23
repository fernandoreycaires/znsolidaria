
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home </a>
          
        </li>
      </ul>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-thumb-tack"></i> Ações <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
          <!-- <li><a href="{{route('acoes.dashboard')}}">Dashboard</a></li> -->
          <!--  <li><a href="{{route('acoes.acoes')}}">Ações</a></li>  -->
          <!--  <li><a href="{{route('acoes.arrecadacao.index')}}">Arrecadações</a></li> -->
            <li><a href="{{route('acoes.comunidade.index')}} ">Comunidades</a></li>
            <li><a href="{{route('acoes.familia.index')}} ">Familias</a></li> 
          </ul>
        </li>
      </ul>
      <!--
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bitcoin"></i> Financeiro <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('financeiro.dashboard')}} ">Dashboard Financeiro</a></li>
            <li><a href="{{route('financeiro.caixa.index')}} ">Livro Caixa</a></li>
          </ul>
        </li>
      </ul>
    -->
    </div>


  </div>
  <!-- /sidebar menu -->
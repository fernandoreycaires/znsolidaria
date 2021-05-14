<!DOCTYPE html>
<html lang="pt-br">

  @includeIf('sistema/layout/head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="{{ asset('image/fotos/painel1.jpg') }}" alt="znsolidaria" width="48px" height="48px" class="img-circle" > <span>ZN Solidária</span></a>
            </div>

            <div class="clearfix"></div>

            @includeIf('sistema/layout/menu_lateral')

          </div>
        </div>

        @includeIf('sistema/layout/header')

        @yield('content')
        
        @includeIf('sistema/layout/footer')

      </div>
    </div>

    @includeIf('sistema/layout/javascript')
	
  </body>
</html>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZN SOLIDÁRIA</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    
    <!-- Font Awesome -->
    <link href="{{asset('theme_lib/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('site/style.css')}}" rel="stylesheet"> 

        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

          .texto-justificado{
            font-weight: bolt;
          }

        </style>

        
        <!-- Custom styles for this template -->
        <link href="{{asset('site/carousel.css')}} " rel="stylesheet">
      </head>
      <body>
        
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ZN Solidária</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link"  href="https://www.instagram.com/zn_solidaria/" target="_blank"><img src="{{ asset('image/instagram.png') }}" width="25px" height="25px" alt="Instagram"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/znsolidaria" target="_blank"><img src="{{ asset('image/facebook.png') }}" width="25px" height="25px" alt="Facebook"></a>
              </li>
            </ul>
            <div class="d-flex">
              @if (Route::has('login'))
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-success">Sistema</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Entrar</a>
                @endauth
              @endif
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" ><rect width="100%" height="100%" fill="#91466b"/></svg> -->
            <img src="{{asset('image/fotos/banner.svg')}}" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"> 

            <div class="container">
              <div class="carousel-caption text-start">
                <!-- <h1>ZN Solidária</h1>
                <p>Ajudando pessoas e famílias em vulnerabilidade social.</p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#91466b"/></svg>-->
            <img src="{{ asset('image/fotos/banner2.svg') }}" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="container">
              <div class="carousel-caption">
                <!-- <h1>Ação Social</h1>
                <p>Abrace essa causa, nos ajude a ajudar quem mais precisa.</p> -->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#91466b"/></svg> -->
            <img src="{{ asset('image/fotos/banner3.svg') }}" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

            <div class="container">
              <div class="carousel-caption text-end">
                <!-- <h1>Doe !</h1>
                <p>Participa da transformação, faça sua doação</p> -->
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/foto_perfis/alina.jpg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Alina</h2>
            <p>WhatsApp</p>
            <p>+55 (11) 9 9805-7284</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/foto_perfis/natalia.jpg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Natalia</h2>
            <p>WhatsApp</p>
            <p>+55 (11) 9 9576-7343</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/foto_perfis/fernando.jpg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Fernando</h2>
            <p>WhatsApp</p>
            <p>+55 (11) 9 5973-6885</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Como nascemos.</span></h2>
            <p class="lead">A ZN Solidária nasceu em meio a pandemia, através de um grupo de amigos que em comum tinham o intuito de ajudar pessoas e famílias em vulnerabilidade social. </p>
            <p class="lead">Em parceria com o <i> Restaurante da Baixinha </i> e de algumas doações, começamos a entregar marmitas em pontos onde haviam muitos moradores de rua nos bairros da Zona Norte de São Paulo. </p>
            <p class="lead">Ao longo do tempo o grupo expandiu os auxílios, novas parcerias surgiram, e assim começamos a entregar Cestas Básicas para as famílias em vulnerabilidade social.</p>
            <p class="lead">O grupo já  acumula mais de 50 Ações Sociais, ajudamos mais de 14 comunidades, entregamos mais de 14.000 marmitas, mais de 500 Cestas Básicas foram entregues as famílias em vulnerabilidade social, mais de 800 lanches em nossos Cafés Solidários, entre tantas outras doações feitas. </p>
            <p class="lead">As ações continuam e mais do que nunca precisamos das suas doações ! </p>
            <p class="lead">Venha conosco, contribua, faça parte da mudança você também ! </p>
            <p class="lead">Acesse nossas Redes Sociais, e acompanhe nossas ações.</p>
          </div>
          <div class="col-md-5">
            <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
            <img src="{{ asset('image/fotos/painel1.jpg') }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"  >
          
          </div>
        </div>

        <hr class="featurette-divider">
    <!-- 
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Formas de <span class="text-muted">ajudar .</span></h2>
            <p class="lead">Alguma descrição bacana, que descreva algo interessante ou quase interessante, com bastante palavras.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

          </div>
        </div>
    -->
        <!-- Três imagens exibidas em bulinhas -->
        <div class="row">
          <div class="col-md-12 order-md-12">
            <h2 class="featurette-heading ">Conheça algumas formas de ajudar .<span class="text-muted"> Participe das ações . </span></h2>
            <br>
          </div>
            
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/alimentos.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Alimentos</h2>
            <p>Não Perecíveis</p>
            <p>Utilizamos estes alimentos doados para montar as cestas básicas. (Macarrão, Molho, Farinha, Farofa Temperada/Fubá, Óleo, Sal, Açúcar, Café, Arroz, Feijão, Bolacha/Biscoito, Achocolatado, Leite)</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/roupas.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Roupas</h2>
            <p>Roupas e Móveis Usados</p>
            <p>Em condições que ainda possam ser usados</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e7afcb"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
            <img src="{{ asset('image/dinheiro.jpeg') }}" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"  >

            <h2>Dinheiro</h2>
            <p>Faça uma doação de qualquer valor, para nossa conta. Entre em Contato.</p>
            <p><i class="fa fa-phone"></i> +55 (11) 9 9805-7284 - Alina</p>
            <p><i class="fa fa-phone"></i> +55 (11) 9 9576-7343 - Natalia</p>
            <p><i class="fa fa-phone"></i> +55 (11) 9 5973-6885 - Fernando</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Endereço de captação de <span class="text-muted">doações.</span></h2>
            <p class="lead">Av. Água Fria, 467 - Conj. 25 - Santana - São Paulo - SP </p>
            <p>CEP: 02333-000</p>
          </div>
          <div class="col-md-5">
            <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.3197498811724!2d-46.625125585023596!3d-23.48498978472087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef64864bc3fff%3A0x208674da8bc004e4!2sAv.%20%C3%81gua%20Fria%2C%20467%20-%20Santana%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2002333-000!5e0!3m2!1spt-BR!2sbr!4v1620955991151!5m2!1spt-BR!2sbr" width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; ZN Solidária - <a href="https://www.instagram.com/zn_solidaria/" target="_blank" ><i class="fa fa-instagram"></i> Instagram </a>
        - <a href="https://www.facebook.com/znsolidaria" target="_blank" ><i class="fa fa-facebook"></i> Facebook </a>
        - <a href="https://www.google.com.br/maps/place/Av.+%C3%81gua+Fria,+467+-+Santana,+S%C3%A3o+Paulo+-+SP,+02333-000/@-23.4849898,-46.6251256,17z/data=!3m1!4b1!4m5!3m4!1s0x94cef64864bc3fff:0x208674da8bc004e4!8m2!3d-23.4849898!4d-46.6229369?hl=pt-BR" target="_blank" ><i class="fa fa-map-marker"></i> Localização </a> </p>
      </footer>
    </main>
        <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="{{asset('site/bootstrap.js')}}"></script>
      </body>
    </html>

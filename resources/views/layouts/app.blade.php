@inject('categoria', 'domun\Categoria')
@inject('subcategoria', 'domun\SubCategoria')


<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Domun') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/header.css') }}" rel="stylesheet">
  <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/vitrine.css') }}" rel="stylesheet">
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>

  <div id="app">
    <nav id="header" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
            IIIII
            {{ config('app.name', 'Thiago') }}
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->


          <form class="navbar-form navbar-left" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Procure seu produto..." name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></i></button>
              </div>
            </div>
          </form>

          <ul class="nav navbar-nav">
            @foreach($categoria->all() as $c)

            <li class="dropdown menu-lista">
              <a href="{{$c->id.'/'.$c->id}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{$c->nome}}<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                @foreach($subcategoria->all() as $sc)
                @if($sc->categoria_id == $c->id )
                <li><a href="{{url('/'.$c->id.'/'.$sc->id)}}">{{$sc->nome}}</a></li>
                @endif
                @endforeach
              </ul>
            </li>
            @endforeach
          </ul>



          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Olá, {{Auth::user()->name}}   <i class="fa fa-user" aria-hidden="true"></i> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>


          @endif

          <li> <a href="#" class="cart-icon">
            Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <div class="item-carrinho">250</div>
          </a> </li>

        </ul>
      </div>
    </div>
  </nav>


  <section id="section">
    @yield('content')
  </section>

  <footer id="footer" class="footer responsive">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <ul>
            <h4>Suporte ao cliente</h4>
            <li><a href="#">Central de relacionamento</a></li>
            <li><a href="#">Troca e devoluções</a></li>
            <li><a href="#">Entrega e prazos</a></li>
            <li><a href="#">Opções de pagamentos</a></li>
            <li><a href="#">Fale conosco</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <ul>
            <h4>Privacidade e termos</h4>
            <li><a href="#">Política de privacidade</a></li>
            <li><a href="#">Termos e condições</a></li>
            <li><a href="#">Termos influenciadores</a></li>
          </ul>
        </div>
      </div>
      <div class="bottom-footer">
        <p class="copyright">Copyright© 2016 Domun - Todos os direitos reservados. Preços e condições de pagamentos são exclusivos para compras via Internet,
          válidos para o dia de hoje ou enquanto durarem nossos estoques, não sendo obrigatoriamente os mesmos preços praticados em lojas. TRUE MEN IND.
          E COM. DE ROUPAS LTDA - Rua Isabel Correia Martin, 23,São Vicente, São Paulo - SP. CNPJ: 05.196.517/0014-36</p>
        </div>
      </div>
    </footer>

  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/file.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>

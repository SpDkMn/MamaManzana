<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mamá manzana! | Error 404</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('img/setting/'.$setting->favicon)}}" />
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('app/css/app.min.css')}}" media="screen,projection">
  </head>
  <body>
    <?php
    use App\Http\Requests;
     ?>
    <header class="header" role="navigation">
        <div class="h_top">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span>MENU</span>
          </button>
          <div class="container-fluid">
            <div class="b_left">
              <div class="h_social">
                @foreach($socialNetwork as $sn )
                <a href="{{$sn->url}}" target="_blank"><i class="fa fa-{{$sn->name}}-square"></i></a>
                @endforeach
              </div>
            </div>
            <div class="b_right">
              <div class="h_user">
                <ul class="nav nav_user">
                  @if($currentUser)
                    <li><a href="{{route('perfil_path')}}"><i class="fa fa-user"></i><span class="hidden-xs">{{$currentUser->name}}</span></a></li>
                    <li><a href="{{route('lista_pedido_path')}}"><i class="fa fa-shopping-cart"></i> ({{$sumShoppingCart}}) <span class="hidden-xs">Mi carrito</span></a></li>
                    <li><a href="{{route('logout_path')}}"><i class="fa fa-sign-out"></i><span class="hidden-xs">Salir</span></a></li>
                  @else
                    <li><a href="{{ route('auth.getSocialAuth','facebook')}}"><i class="fa fa-user"></i> <span class="hidden-xs">Iniciar Sesión</span></a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix">
          <div class="h_logo">
          </div>
          <div class="nav_color">
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav_manzana">
                <li @if(Request::is('/') )class="active"@endif><a href="{{route('home_path')}}">INICIO</a></li>
                <li @if(Request::is('nosotros') )class="active"@endif><a href="{{route('nosotros_path')}}">NOSOTROS</a></li>
                <li @if(Request::is('categoria*') )class="active"@endif><a href="{{route('category_path')}}">CATEGORIAS</a></li>
                <li @if(Request::is('contacto') )class="active"@endif><a href="{{route('contact_path')}}">CONTACTO</a></li>
                <!--li><a href="pedidos.html">PEDIDOS</a></li-->
              </ul>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
      <footer class="footer">
        <div class="footer-top">
          <div class="container">
            <div class="text-center">
              <?= $setting->phrase; ?>
            </div>
            <img class="img-responsive" src="{{asset('img/setting/'.$setting->footer)}}" alt="">
          </div>
        </div>
        <div class="footer-bottom">
          <div class="clearfix">
            <ul class="nav nav_manzana">
              <li @if(Request::is('/') )class="active"@endif><a href="{{route('home_path')}}">INICIO</a></li>
              <li @if(Request::is('nosotros') )class="active"@endif><a href="{{route('nosotros_path')}}">NOSOTROS</a></li>
              <li @if(Request::is('categoria*') )class="active"@endif><a href="{{route('category_path')}}">CATEGORIAS</a></li>
              <!--li><a href="pedidos.html">PEDIDOS</a></li-->
              <li @if(Request::is('contacto') )class="active"@endif><a href="{{route('contact_path')}}">CONTACTO</a></li>
            </ul>
            <img class="img-responsive" src="{{asset('app/img/mustache-w.png')}}" alt="">
          </div>
          <ul class="nav nav_social">
            @foreach($socialNetwork as $sn )
            <li><a href="{{$sn->url}}" target="_blank"><i class="fa fa-{{$sn->name}}-square"></i></a></li>
            @endforeach
          </ul>
          <h5 class="copy-right">© 2016 Mamá Manzana. Todos los derechos reservados.</h5>
        </div>
      </footer>
    <script src="{{asset('app/js/jquery.js')}}"></script>
    <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('app/js/viewportchecker.js')}}"></script>
    <script src="{{asset('app/js/app.min.js')}}"></script>
  </body>
</html>

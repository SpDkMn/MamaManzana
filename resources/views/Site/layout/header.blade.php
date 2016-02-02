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
                <li><a href="{{route('lista_pedido_path')}}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">Mi carrito ({{$sumShoppingCart}})</span></a></li>
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
            <li @if(Request::is('categorias') )class="active"@endif><a href="{{route('category_path')}}">CATEGORIAS</a></li>
            <!--li><a href="pedidos.html">PEDIDOS</a></li-->
            <li @if(Request::is('contacto') )class="active"@endif><a href="{{route('contact_path')}}">CONTACTO</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

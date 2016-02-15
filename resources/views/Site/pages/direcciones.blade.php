@extends('Site.layout.template')

@section('script1')
<script src="{{asset('app/js/jquery-ui.js')}}"></script>
@stop


@section('content')
<section class="section-perfil">
  <div class="container">
    <div class="text-left">
      <h1 class="title">Mi Cuenta</h1>
    </div>
    <div class="clearfix container-account">
      <div class="account-navigation margin-large-top">
        <ul class="account-navigation-ul">
          <li>
            <a href="perfil.html"><i class="fa fa-user"></i> <span>Mi Perfil</span></a>
            <ul class="profile-items">
              <li><a href="perfil.html">Mis datos personales</a></li>
              <li><a href="direcciones.html">Mis direcciones</a></li>
            </ul>
          </li>
          <li>
            <a href=""><i class="fa fa-truck"></i><span>Mis pedidos</span></a>
          </li>
        </ul>
      </div>
      <div class="account-section">
        <div class="category-title">
          <h2>Mi perfil</h2>
        </div>
        <div class="section-content">
          <div class="category-subtitle">
            <h3>Mis direcciones <a href="agregardirect.html">Agregar dirección</a></h3>
            <h4>Predeterminada <a href="entrega.html">Cambiar</a></h4>
          </div>
          <div class="content-direction">
            <ul class="nav nav_direct">
              <li class="">
                <p><strong>Antonio Vargas</strong></p>
                <p>Junin 3168</p>
                <p>Altura de la Avenida Perú la cuadra 31</p>
                <p>San Martin de Porres, Lima</p>
                <p>993305902</p>
                <a class="btn-remove-address" href="">Eliminar</a>
              </li>
              <li class="">
                <p><strong>Adolfo Vargas</strong></p>
                <p>Junin 3168</p>
                <p>Altura de la Avenida Perú la cuadra 31</p>
                <p>San Martin de Porres, Lima</p>
                <p>993305902</p>
                <a class="btn-remove-address" href="">Eliminar</a>
              </li>
              <li class="">
                <p><strong>Pedro Díaz</strong></p>
                <p>Junin 3168</p>
                <p>Altura de la Avenida Perú la cuadra 31</p>
                <p>San Martin de Porres, Lima</p>
                <p>993305902</p>
                <a class="btn-remove-address" href="">Eliminar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

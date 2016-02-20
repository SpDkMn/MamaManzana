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
            <a href="{{route('perfil_path')}}"><i class="fa fa-user"></i> <span>Mi Perfil</span></a>
            <ul class="profile-items">
              <li><a href="{{route('perfil_path')}}">Mis datos personales</a></li>
              <li><a href="">Mis direcciones</a></li>
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
            <h3>Mis direcciones <a href="{{route('nueva_direccion_path')}}">Agregar dirección</a></h3>
            <!--h4>Predeterminada <a href="entrega.html">Cambiar</a></h4-->
          </div>
          <div class="content-direction">
            <ul class="nav nav_direct">
              @foreach ($addresses as $a)
              <li class="">
                <form action="{{ route('eliminar_direccion_post_path')}}" method="POST">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="address_title" value="{{$a->title}}">
                  {{ csrf_field() }}

                  <p><strong>{{$a->title}}</strong></p>
                  <p><strong>{{$a->name_address}} {{$a->last_name_address}}</strong></p>
                  <p>{{$a->address}}</p>
                  <p>{{$a->reference}}</p>
                  <p>{{$a->cities->name}}, {{$a->states->name}}</p>
                  <p>{{$a->phone}}</p>
                  <a class="btn-remove-address">Eliminar</a>
                </form>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

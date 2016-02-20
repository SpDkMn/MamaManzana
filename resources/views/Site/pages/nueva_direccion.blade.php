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
                <li><a href="{{route('direcciones_path')}}">Mis direcciones</a></li>
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
            <form class="form-add-address" action="{{ route('nueva_direccion_post_path')}}" method="POST" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Nombre de la dirección</label>
                    <input type="text" class="form-control" name='title'>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="name_address">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Apellido</label>
                    <input type="text" class="form-control" name="last_name_address">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="phone">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Otro Teléfono</label>
                    <input type="text" class="form-control" name="other_phone">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="address">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Referencia</label>
                    <input type="text" class="form-control" name="reference">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <label for="">Distrito</label>
                    <select name="zona" id="" class="form-control">
                      <option value="">Seleccione</option>
                      @foreach($zones as $z)
                      <option value="{{$z->id}}">{{$z->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn-add-address">CONTINUAR</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop

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
              <a href=""><i class="fa fa-user"></i> <span>Mi Perfil</span></a>
              <ul class="profile-items">
                <li><a href="">Mis datos personales</a></li>
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
            <div class="category-subtitle">
              <h3>Mis Datos Personales</h3>
            </div>
            <form action="{{ route('perfil_post_path')}}" method="POST"  class="form-profile">
              {{ csrf_field() }}
              <div class="width-content">
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                      <label for="">Nombre</label>
                      <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                      <label for="">Sexo</label>
                      <div class="clearfix">
                        <div class="col-radio" autocomplete="sex">
                          <input type="radio" id="profile_gender_0" name="genre" required="required" class="custom-radio" value="female" @if(Auth::user()->gender == 'female') checked="checked" @endif>
                          <label for="profile_gender_0" class="radio-text">
                            <span class="radio-skin"></span>Femenino
                          </label>
                        </div>
                        <div class="col-radio" autocomplete="sex">
                          <input type="radio" id="profile_gender_1" name="genre" required="required" class="custom-radio" value="male" @if(Auth::user()->gender == 'male') checked="checked" @endif>
                          <label for="profile_gender_1" class="radio-text">
                            <span class="radio-skin"></span>Masculino
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                      <label for="">Fecha de nacimiento</label>
                      <input type="date" name="date" class="form-control" @if(!is_null(Auth::user()->date)) value="{{Auth::user()->date}}" @endif>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control f-email" name="email" value="{{Auth::user()->email}}" readonly="readonly">
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn-onsubmit">GUARDAR CAMBIOS</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @stop

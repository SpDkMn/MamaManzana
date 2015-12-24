@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-login">
    <div class="container">
      <div class="text-center">
        <h1 class="title">INICIAR SESIÓN</h1>
      </div>
      <div class="description">
        <form action="" class="form-horizontal form-login" autocomplete="off">
          <img data-sr="enter right move 200px over .6s" class="leaf-2" src="app/img/leaf1.png" alt="leaf">
          <img data-sr="enter left move 200px over .6s" class="leaf-1" src="app/img/leaf2.png" alt="leaf">
          <div class="form-gp">
            <label for="first-name" class="control-label">Nombre:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="first-name" name="first-name" autocomplete="off">
            </div>
          </div>
          <div class="form-gp">
            <label for="pass" class="control-label">Contraseña:</label>
            <div class="col-form">
              <input type="password" class="form-control" id="pass" name="pass" autocomplete="off">
            </div>
          </div> 
          <div class="form-gp">
            <div class="col-form">
              <div class="row">
                <div class="col-xs-6">
                  <input class="remember-check" id="rememberme" name="rememberme" type="checkbox">
                  <label class="remember-label" for="rememberme">RECUÉRDAME</label>
                </div>
                <div class="col-xs-6">
                  <div class="text-right">
                    <button type="button" class="btn-send">ENVIAR</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <a href=""><img src="app/img/buttonfb.png" alt=""></a>
        <br><br>
        <img class="img-responsive" src="app/img/appleus.jpg" alt="">
      </div>
    </div>
  </section>
  <div class="up-effect">
    <div class="container">
      <a class="btn-up" href="#">
        <i class="fa fa-chevron-up fa-lg"></i>
      </a>
    </div>
  </div>
@stop
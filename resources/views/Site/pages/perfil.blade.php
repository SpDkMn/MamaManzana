@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-perfil">
    <div class="container">
      <div class="text-center">
        <h1 class="title">¡HOLA OSCAR!</h1>
      </div>
      <div class="description">
      <div class="img-perfil">
        <div class="img-user" style="background-image: url(app/img/imgmsj.png)">
        </div>
        <div class="fileUpload">
          <span><i class="fa fa-camera fa-2x"></i></span>
          <input class="upload" type="file" name="pic" accept="image/*">
        </div>
      </div>
        <form action="" class="form-horizontal form-perfil">
          <div class="text-center">
            <h5>DATOS</h5>
          </div>
          <div class="form-gp">
            <label for="first-name" class="control-label">Nombre:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="first-name" name="first-name">
            </div>
          </div>
          <div class="form-gp">
            <label for="last-name" class="control-label">Apellido:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="last-name" name="last-name">
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Email:</label>
            <div class="col-form">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="form-gp">
            <label for="address" class="control-label">Dirección:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="address" name="address">
            </div>
          </div> 
          <div class="form-gp">
            <div class="text-center">
              <button type="button" class="btn-send">editar</button>
            </div>
          </div>
        </form>
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
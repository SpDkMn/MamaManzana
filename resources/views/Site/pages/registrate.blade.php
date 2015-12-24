@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
  <div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-register">
    <div class="container">
      <div class="text-center">
        <h1 class="title">REGISTRATE</h1>
      </div>
      <div class="description">
        <form action="" class="form-horizontal form-register">
          <img data-sr="enter right move 200px over .6s" class="leaf-2" src="app/img/leaf1.png" alt="leaf">
          <img data-sr="enter left move 200px over .6s" class="leaf-1" src="app/img/leaf2.png" alt="leaf">
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
            <label for="pass" class="control-label">Contraseña:</label>
            <div class="col-form">
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
          </div> 
          <div class="form-gp">
            <label for="repass" class="control-label">Confirmar Contraseña:</label>
            <div class="col-form">
              <input type="password" class="form-control" id="repass" name="repass">
            </div>
          </div> 
          <div class="form-gp">
            <label for="repass" class="control-label">Fecha de Nacimiento:</label>
            <div class="col-form">
              <div class="row">
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>Ene</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Abr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Ago</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dic</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>2001</option>
                    <option>2002</option>
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                  </select>
                </div>
              </div>
            </div>
          </div> 
          <div class="form-gp">
            <div class="text-right">
              <button type="button" class="btn-send">ENVIAR</button>
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
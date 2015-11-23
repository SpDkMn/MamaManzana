@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-contact">
    <div class="container">
      <div class="text-center">
        <h1 class="title">ESCRIBENOS</h1>
      </div>
      <div class="description">
        <form action="" class="form-horizontal form-contact">
          <img data-sr="enter left move 200px over .6s" class="leaf-1" src="app/img/leaf1.png" alt="leaf">
          <img data-sr="enter right move 200px over .6s" class="leaf-2" src="app/img/leaf2.png" alt="leaf">
          <div class="form-gp">
            <label for="concept" class="control-label">Nombre:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="concept" name="concept">
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Email:</label>
            <div class="col-form">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="form-gp">
            <label for="description" class="control-label">Comentario:</label>
            <div class="col-form">
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
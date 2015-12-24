@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
  <div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-category">
    <div class="container">
      <div class="content_prod clearfix">
        <img data-sr="enter left move 200px over .6s" class="leaf-1" src="app/img/leaf1.png" alt="leaf">
        <img data-sr="enter right move 200px over .6s" class="leaf-2" src="app/img/leaf2.png" alt="leaf">
        <div class="img_apple">
          <img src="app/img/imgslider.png" alt="">
        </div>
        <div class="descrip_apple">
          <h3 class="title">MANZANA 1</h3>
          <img src="app/img/mustache.png" alt="">
          <p class="msj">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
    <div class="content-category clearfix">
      <ul class="nav nav_prod">
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO NUMERO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO NUMERO SIETE</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
        <li>
          <div class="b_prod">
            <h3 class="name-prod">PRODUCTO 1</h3>
            <img class="img-responsive" src="app/img/apple.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <a class="btn-pay" href="">COMPRAR</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="b_msj">
      <div class="container">
        <div class="text-center">
          <h3 class="title">LOS MEJORES</h3>
          <h4 class="subtitle">INGREDIENTES</h4>
        </div>
      </div>
      <img class="img-responsive" src="app/img/imgmsj.png" alt="">
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
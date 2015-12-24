@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
  <div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-product">
    <ul class="nav nav_list_products">
      <li class="li_product"> 
        <div class="container">
          <div class="content_prod">
            <div class="img_apple">
              <img class="img-responsive" src="app/img/imgslider.png" alt="">
            </div>
            <div class="descrip_apple">
              <h3 class="title">MANZANA 1</h3>
              <img src="app/img/mustache.png" alt="">
              <p class="msj">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a class="btn-more" href="">VER</a>
            </div>
          </div>
        </div>
      </li>
      <li class="li_product"> 
        <div class="container">
          <div class="content_prod">
            <div class="img_apple">
              <img class="img-responsive" src="app/img/imgslider.png" alt="">
            </div>
            <div class="descrip_apple">
              <h3 class="title">MANZANA 1</h3>
              <img src="app/img/mustache.png" alt="">
              <p class="msj">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a class="btn-more" href="">VER</a>
            </div>
          </div>
        </div>
      </li>
      <li class="li_product"> 
        <div class="container">
          <div class="content_prod">
            <div class="img_apple">
              <img class="img-responsive" src="app/img/imgslider.png" alt="">
            </div>
            <div class="descrip_apple">
              <h3 class="title">MANZANA 1</h3>
              <img src="app/img/mustache.png" alt="">
              <p class="msj">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a class="btn-more" href="">VER</a>
            </div>
          </div>
        </div>
      </li>
      <li class="li_product"> 
        <div class="container">
          <div class="content_prod">
            <div class="img_apple">
              <img class="img-responsive" src="app/img/imgslider.png" alt="">
            </div>
            <div class="descrip_apple">
              <h3 class="title">MANZANA 1</h3>
              <img src="app/img/mustache.png" alt="">
              <p class="msj">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <a class="btn-more" href="">VER</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
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
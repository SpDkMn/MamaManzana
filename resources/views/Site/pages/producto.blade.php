@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-product">
    <div class="container">
      <div class="detail-global">
        <div class="head_product">
          <h1>Nombre del producto de mama manzana</h1>
        </div>
        <div class="body_product">
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <img class="img-responsive" src="app/img/imgslider.png" alt="">
            </div>
            <div class="col-xs-12 col-md-8">
              <div class="content-caract">
                <h2>CARACTERISTICAS PRINCIPALES</h2>
                <ul class="nav nav_caract">
                  <li>Bañado de chocolate</li>
                  <li>Contiene almendras</li>
                  <li>Super delicioso</li>
                  <li>Bañado de chocolate</li>
                  <li>Contiene almendras</li>
                  <li>Super delicioso</li>
                  <li>Bañado de chocolate</li>
                  <li>Contiene almendras</li>
                  <li>Super delicioso</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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
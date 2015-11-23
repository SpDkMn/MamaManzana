@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-us">
    <div class="container">
      <div class="text-center">
        <h1 class="title">NOSOTROS</h1>
      </div>
      <div class="description">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a felis fringilla, varius massa commodo, feugiat nisi. Cras tristique ante a vestibulum dictum. Duis tincidunt sollicitudin ullamcorper. Morbi ut sapien sed dui hendrerit facilisis. Nunc volutpat convallis neque at accumsan. Vestibulum id imperdiet orci. Nullam vel sagittis quam, id fermentum urna.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a felis fringilla, varius massa commodo, feugiat nisi. Cras tristique ante a vestibulum dictum. Duis tincidunt sollicitudin ullamcorper. Morbi ut sapien sed dui hendrerit facilisis. Nunc volutpat convallis neque at accumsan. Vestibulum id imperdiet orci. Nullam vel sagittis quam, id fermentum urna.</p>
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
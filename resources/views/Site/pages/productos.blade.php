@extends('Site.layout.template')

@section('content')
<section class="section-category">
    <div class="container">
      <div class="content_product clearfix">
        <div class="img_apple">
          <img class="img-response" src="{{asset('img/category/'.$categoria->img->name)}}" alt="">
        </div>
        <div class="descrip_apple">
          <h3 class="title">{{$categoria->name}}</h3>
          <img src="{{asset('app/img/mustache.png')}}" alt="">
          <p class="msj">{{$categoria->description}}</p>
        </div>
      </div>
    </div>
    <div class="content-category clearfix">
      <div class="container">
        <ul class="nav nav_product">
          @foreach($productos as $prod )
          <li>
            <div class="b_product">
              <div class="border">
                <img class="img-responsive" src="{{asset('img/product/'.$prod->img->name)}}" alt="">
                <div class="price-product">
                  <span>S/. {{$prod->cost}}</span>
                </div>
              </div>
              <div class="b_table">
                <div class="b_cell">
                  <h3>{{$prod->name}}</h3>
                </div>
              </div>
              <a class="pay-product" href="{{route('productos_path',$prod->slug)}}">COMPRAR</a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>
@stop

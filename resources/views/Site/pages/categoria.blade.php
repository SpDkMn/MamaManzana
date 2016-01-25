@extends('Site.layout.template')

@section('content')
<section class="section-category">
    <div class="container">
      <div class="content_product clearfix">
        <div class="img_apple">
          <img class="img-response" src="app/img/imgslider.png" alt="">
        </div>
        <div class="descrip_apple">
          <h3 class="title">Categorías</h3>
          <img src="app/img/mustache.png" alt="">
          <p class="msj">Seleccione una de nuestras categorías para ver nuestros productos.</p>
        </div>
      </div>
    </div>
    <div class="content-category clearfix">
      <div class="container">
        <ul class="nav nav_product">
          @foreach($categorias as $cat )
          <li>
            <div class="b_product">
              <div class="border">
                <img class="img-responsive" src="{{asset('img/category/'.$cat->img->name)}}" alt="">
              </div>
              <div class="b_table">
                <div class="b_cell">
                  <h3>{{$cat->name}}</h3>
                </div>
              </div>
              <a class="pay-product" href="{{route('category_slug_path',$cat->slug)}}">VER MÁS</a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </section>
@stop

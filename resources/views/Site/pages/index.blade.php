@extends('Site.layout.template')

@section('content')
<section class="section-home">
    <div id="apple-crsl" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox"><?php $i = 0; ?>
        @foreach($sliders as $sl)
        <div class="item @if($i++ == 0) active @endif">
          <div class="container-carousel">
            <div class="b_left">
              <div class="b_cell">
                <div class="carousel-description">
                  <h3 class="title_apple">{{$sl->title}}</h3>
                  <h4 class="subtitle_apple"><?= $sl->short_description ?></h4>
                  <a class="btn-buy" href="{{asset($sl->slug)}}">{{$sl->action}}</a>
                </div>
              </div>
            </div>
            <div class="b_right">
              <img class="img-responsive" src="{{asset('img/sliders/'.$sl->img)}}">
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="left carousel-control" href="#apple-crsl" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg"></i>
      </a>
      <a class="right carousel-control" href="#apple-crsl" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg"></i>
      </a>
    </div>
    <div class="b_products">
        <div class="call-me">
          <div class="txt">
            <span><i class="fa fa-phone"></i>&nbsp;PEDIDOS</span>
          </div>
          <div class="number">
            <a href="tel: 01476298726">al {{$contactInformation->phone}}</a>
          </div>
        </div>
      <div class="container">
        <div class="text-center">
          <h1 class="title">Productos</h1>
          <img src="app/img/mustache.png" alt="">
        </div>
        <div class="b_list">
          <span class="s-control left" id="slider-prev-prod"></span>
          <span class="s-control right" id="slider-next-prod"></span>
          <ul id="bx-products" class="nav nav_product">

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
                <a class="btn-view-more" href="{{route('productos_path',$prod->slug)}}">VER DETALLE</a>
              </div>
            </li>
            @endforeach

          </ul>
        </div>
        <div class="text-center">
          <h1 class="title">Categorías</h1>
          <img src="{{asset('app/img/mustache.png')}}" alt="">
        </div>
        <div class="b_list">
          <span class="s-control left" id="slider-prev-cate"></span>
          <span class="s-control right" id="slider-next-cate"></span>
          <ul id="bx-category" class="nav nav_product">
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
                <a class="btn-view-more" href="{{route('category_slug_path',$cat->slug)}}">VER CATEGORÍA</a>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
@stop

@section('script1')
<script src="{{asset('app/js/jquery-ui.js')}}"></script>
@stop

@section('script2')
<script src="{{asset('app/js/bxslider.js')}}"></script>
@stop

@section('script3')
<script>
  $(function(){
    var _maxslid, _width = $(window).width();
    if ( _width >= 1200 ) {
      _maxslid = 4;
    }else if( _width >= 992 && _width < 1200 ){
      _maxslid = 3;
    }else if( _width >= 768 && _width < 992 ){
      _maxslid = 2;
    }else if( _width < 768 ){
      _maxslid = 1;
    }
    $('#bx-products').bxSlider({
      nextSelector: '#slider-next-prod',
      prevSelector: '#slider-prev-prod',
      nextText: '<i class="fa fa-chevron-right fa-lg"></i>',
      prevText: '<i class="fa fa-chevron-left fa-lg"></i>',
      pager: false,
      slideWidth: 275,
      minSlides: 1,
      maxSlides: _maxslid,
      slideMargin: 10,
      moveSlides: 1,
      hideControlOnEnd: true,
      infiniteLoop: false,
    });
    $('#bx-category').bxSlider({
              nextSelector: '#slider-next-cate',
              prevSelector: '#slider-prev-cate',
              nextText: '<i class="fa fa-chevron-right fa-lg"></i>',
              prevText: '<i class="fa fa-chevron-left fa-lg"></i>',
              pager: false,
              slideWidth: 275,
              minSlides: 1,
              maxSlides: _maxslid,
              slideMargin: 10,
              moveSlides: 1,
              hideControlOnEnd: true,
              infiniteLoop: false,
            });
  });
</script>
@stop

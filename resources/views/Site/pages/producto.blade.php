@extends('Site.layout.template')

@section('content')
<section class="section-product">
    <div class="container">
      <div class="detail-global">
        <div class="head_product">
          <h1 class="title">Detalle del producto</h1>
          <img src="{{asset('app/img/mustache.png')}}" alt="mustache">
        </div>
        <div class="body_product">
          <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="content-imagen">
                    <div class="b_imagen">
                      <ul id="bx-imagen" class="bxslider" style="list-style:none">
                        <li><img class="img-responsive img-apple" src="{{asset('img/product/'.$producto->img->name)}}" alt=""></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="content-caract">
                    <div class="product-detail">
                      <strong>S/. {{$producto->cost}}</strong>
                      <h2>{{$producto->name}}</h2>
                      <p>{{$producto->description}}</p>
                    </div>
                    <div class="product-quantity">
                      @if(is_null(Auth::user()))
                      <form class="form-quantity" action="">
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <a href="{{ route('auth.getSocialAuth','facebook')}}" class="btn-add">Iniciar sesión con facebook</a>
                          </div>
                        </div>
                      </form>
                      @else
                      <form class="form-quantity" action="">
                        <div class="row">
                          <div class="col-xs-4 col-sm-2 col-md-3">
                            <div class="form-group input-quantity">
                              <h4>Cant.</h4>
                              <select name="" id="" class="form-control">
                                @for($i=1; $i< 11; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 text-center">
                            <a href="list-producto.html" class="btn-add">Agregar al Carrito</a>
                          </div>
                        </div>
                      </form>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="b_products">
        <div class="clearfix">
          <div class="text-center">
            <h1 class="title">Productos más vistos</h1>
            <img src="{{asset('app/img/mustache.png')}}" alt="">
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
                  </div>
                  <div class="b_table">
                    <div class="b_cell">
                      <h3>{{$prod->name}}</h3>
                    </div>
                  </div>
                  <a class="btn-view-more" href="{{route('productos_path',$prod->slug)}}">VER MÁS</a>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
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
      });
    </script>
  </section>
@stop

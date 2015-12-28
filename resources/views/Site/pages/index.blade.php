@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-home">
    <div id="apple-crsl" class="carousel slide" data-ride="carousel">
      <!-- ol class="carousel-indicators">
        <li data-target="#apple-crsl" data-slide-to="0" class="active"></li>
        <li data-target="#apple-crsl" data-slide-to="1"></li>
        <li data-target="#apple-crsl" data-slide-to="2"></li>
      </ol -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-responsive" src="app/img/imgslider.png">
          <div class="carousel-caption">
            <div class="container">
              <div class="title_apple">
                <h3>MANZANA<br><span>CON</span><br>MANY Y NUECES</h3>
              </div>
              <div class="subtitle_apple">
                <h4>ORIGINALES<br>MANZANAS DULCES</h4>
                <a class="btn-buy" href="">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="img-responsive" src="app/img/imgslider.png">
          <div class="carousel-caption">
            <div class="container">
              <div class="title_apple">
                <h3>MANZANA<br><span>CON</span><br>CHOCOLATE</h3>
              </div>
              <div class="subtitle_apple">
                <h4>ORIGINALES<br>MANZANAS DEL AMOR</h4>
                <a class="btn-buy" href="">COMPRAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#apple-crsl" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg"></i>
      </a>
      <a class="right carousel-control" href="#apple-crsl" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg"></i>
      </a>
    </div>
    <div class="b_products">
      <div class="container">
        <div class="call-me">
          <div class="txt">
            <span><i class="fa fa-lg fa-phone"></i>&nbsp;PEDIDOS</span>
          </div>
          <div class="number">
            <a href="tel: 01476298726">al (01) 4762 98726</a>
          </div>
        </div>
        <div class="text-center">
          <h1 class="title">PRODUCTOS</h1>
          <img src="app/img/mustache.png" alt="">
        </div>
        <div class="b_list">
          <ul class="nav nav_prod">
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing edsadsa dsa dsa dsa dsad sad sad sadwqwqqqqqwe qwfdgsdf gsdlit.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
            <li>
              <div class="text-center">
                <div class="descript">
                  <div class="c_title">
                    <h3>CATEGORIA 1CATEGORIA 1CATEGORIA 1CATEGORIA 1</h3>
                  </div>
                  <img class="img-responsive" src="app/img/apple.png" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. mnis voluptatibus inventore atque velit cmenda quam dae ipsam ea porro, dicta ad.</p>
                  <a class="btn-more" href="categoria.html">VER MÁS</a>
                </div>
              </div>
            </li>
          </ul>
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
      <img class="img-responsive" src="app/img/footer.png" alt="">
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

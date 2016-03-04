@extends('Site.layout.template')

@section('content')
  <section class="section-checkout">
    <div class="container">
      <div class="text-center">
        <h1 class="title">Gracias por su orden</h1>
        <img src="app/img/mustache.png" alt="mustache">
        <div class="clearfix finish-message">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam modi at dolorum, voluptatibus animi soluta rerum ex aliquam error temporibus alias, nulla, magni rem laudantium dolor sunt porro quo vitae.</p>
        </div>
      </div>

        <div class="detail-global">
          <div class="head_product">
            <h1 class="title">Pedido</h1>
            <img src="app/img/mustache.png" alt="mustache">
          </div>
          <div class="body_product">
            <div class="row">
              <div class="col-sm-12 col-md-8">
                <table class="table table-list-product">
                  <thead>
                    <tr>
                      <th>Producto</th>
                      <th class="hidden-xs">Precio</th>
                      <th class="hidden-xs">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($productos as $p)
                    <tr>
                      <td class="col-xs-10 col-sm-7">
                        <div class="media">
                          <a class="pull-left" href="#"> <img class="media-object" src="app/img/apple.png" style="width: 32px;"> </a>
                          <div class="media-body">
                            <a class="product-name" href="#">{{$p->name}}</a>
                            <div class="clearfix">
                              <input type="text" name="cantidad-{{$p->id}}" class="form-control" value="">
                              <span class="visible-xs-inline-block">S/. {{$p->amount}}</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="col-xs-3 col-sm-2 hidden-xs">S/. {{$p->cost}}</td>
                      <td class="col-xs-3 col-sm-2 hidden-xs">S/. {{$p->amount}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12 col-md-4">
                <table class="table table-resumen">
                  <thead>
                    <tr>
                      <th>RESUMEN DE TU PEDIDO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="clearfix">
                          <div class="pull-left">
                            Subtotal
                          </div>
                          <div class="pull-right product-price">
                            S/. {{$order->sub_total}}
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="clearfix">
                          <div class="pull-left">
                            Envío
                          </div>
                          <div class="pull-right product-price">
                            S/. {{$order->shipping_cost}}
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="clearfix">
                          <div class="pull-left">
                            Total
                          </div>
                          <div class="pull-right product-price">
                            S/. {{$order->total}}
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      <div class="text-center">
        <div class="finish-date">
          <h3>Cuenta Bancaria</h3>
          <p>0125-5446599-5645</p>
          <br>
          <h3>Total de la compra</h3>
          <p>S/. {{$order->total}}</p>
          <br>
          <h3>Fecha de Entrega</h3>
          <p>{{$order->day}}/{{$order->month}}/{{$order->year}}</p>
        </div>
        <br>
        <a class="btn-back-home" href="{{route('home_path')}}">Regresar al inicio</a>
      </div>
    </div>
  </section>
@stop

@section('script1')
<script src="app/js/jquery-ui.js"></script>
@stop

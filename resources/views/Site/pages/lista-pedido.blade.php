@extends('Site.layout.template')

@section('content')
<section class="section-list-product">
    <div class="container">
      <div class="detail-global">
        <div class="head_product">
          <h1 class="title">Carrito de manzanas</h1>
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
                    <th> </th>
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
                          <a class="product-category hidden-xs" href="#">Categoria producto nombre</a>
                          <div class="clearfix">
                            <select name="cantidad" id="cantidad" class="form-control">
                              @for($i=1; $i< (($p->count > 11)?($p->count+1) : 11) ; $i++)
                              <option value="{{$i}}" @if($i ==$p->count ) selected @endif>{{$i}}</option>
                              @endfor
                            </select>
                            <span class="visible-xs-inline-block">S/. {{$p->amount}}</span>
                            <!--button type="button" class="btn-remove-product visible-xs-inline-block">
                              <i class="fa fa-times "></i>
                            </button -->
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-xs-3 col-sm-2 hidden-xs">S/. {{$p->cost}}</td>
                    <td class="col-xs-3 col-sm-2 hidden-xs">S/. {{$p->amount}}</td>
                    <td class="col-xs-2 col-sm-1">
                      <form action="{{ route('eliminar_direccion_post_path')}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="shopping_cart_id" value="">
                        {{ csrf_field() }}
                        <button type="button" class="btn-remove-product" type="submit">
                          <i class="fa fa-times"></i>
                        </button>
                      </form>
                    </td>
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
                          S/. {{$cart->sub_total}}
                        </div>
                      </div>
                    </td>
                  </tr>
                  <!--tr>
                    <td>
                      <div class="clearfix">
                        <div class="pull-left">
                          Envio
                        </div>
                        <div class="pull-right">
                          S/. 20.00
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
                          S/. 160.00
                        </div>
                      </div>
                    </td>
                  </tr-->
                  <tr>
                    <td class="td-button">
                      <a href="{{route('checkout_path')}}" class="btn-send-cart">
                        PROCESAR COMPRA
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop

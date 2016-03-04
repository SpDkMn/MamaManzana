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
                          <div class="clearfix">
                            <select name="cantidad-{{$p->id}}" class="form-control select-product-count" data-id="{{$p->id}}">
                              @for($i=1; $i< (($p->count > 11)?($p->count+1) : 11) ; $i++)
                              <option value="{{$i}}" @if($i ==$p->count ) selected @endif>{{$i}}</option>
                              @endfor
                            </select>
                            <span class="visible-xs-inline-block">S/. {{$p->amount}}</span>
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
                        <button type="button" class="btn-remove-product" type="submit" data-id="{{$p->id}}">
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

@section('script3')
  <script>
    $(function(){
      $('.btn-remove-product').click(
        function(e){
          e.preventDefault();
          var $id = $(this).data("id");
          $.ajax({
            type: "POST",
            url: '{{route('ajax_delete_shopping_cart_product_path')}}',
            data: {id:$id,_token:"<?php echo csrf_token(); ?>"},
            success: function($data){
              if($data['result'].localeCompare('success')==0){
                location.reload();
              }
              console.log($data['result']);
            },
            dataType: 'json'
          });
      });
      $(".select-product-count").change(function(e){
        e.preventDefault();
        var $id = $(this).data('id');
        var $count = $(this).val();
        $.ajax({
          type: "POST",
          url: '{{route('ajax_update_shopping_cart_product_path')}}',
          data: {id:$id,count:$count,_token:"<?php echo csrf_token(); ?>"},
          success: function($data){
            if($data['result'].localeCompare('success')==0){
              location.reload();
            }
            console.log($data['result']);
          },
          dataType: 'json'
        });

});
    });
  </script>
@stop

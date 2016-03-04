@extends('Site.layout.template')

@section('content')
  <section class="section-checkout">
    <div class="container">

      <div class="text-center">
        <h1 class="title">Checkout</h1>
        <img src="app/img/mustache.png" alt="mustache">
      </div>
      <form method="POST" action="{{route('post_realizar_pedido_path')}}" class="form-checkout">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="b_step">
              <div class="b_step-head">
                <h4><span>1</span> DATOS DEL CLIENTE</h4>
              </div>
              <div class="b_step-body">
                <div class="form-group">
                  <label for="name_client">Dirección</label>
                  <select name="addresses" id="address_select" class="form-control mg-b">
                    <option value="0">Dirección</option>
                    @foreach ($addresses as $a)
                    <option value="{{$a->id}}">{{$a->title}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="name_client">Nombre</label>
                  <input type="text" class="form-control" id="name_address" disabled="true">
                </div>
                <div class="form-group">
                  <label for="phone_client">Teléfono</label>
                  <input type="text" class="form-control" id="phone_address" disabled="true">
                </div>
                <div class="form-group">
                  <label for="state_client">Dirección</label>
                  <input type="text" class="form-control mg-b" id="state_address" disabled="true">
                  <input type="text" class="form-control mg-b" id="address" placeholder="Dirección" disabled="true">
                  <textarea id="reference" class="form-control reference" placeholder="Referencia" disabled="true"></textarea>
                </div>
                <div class="form-group">
                  <label for="phone_client">Fecha</label>
                  <input type="text" name="date_delivery" class="form-control" id="date_client">
                </div>
                <div class="form-group">
                  <label for="state_client">Turno de Entrega</label>
                  <select name="turn_delivery" id="state_client" class="form-control" disabled="true">
                  </select>
                </div>
                <div class="checkbox">
                  <label>
                    <input id="same_address" type="checkbox" value="">
                    Utilizar estos datos para envio
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="b_step">
              <div class="b_step-head">
                <h4><span>2</span> DATOS DE ENVIO</h4>
              </div>
              <div class="b_step-body">
                <div class="form-group">
                  <label for="name_client">Dirección</label>
                  <select name="addresses_delivery" id="address_select_2" class="form-control mg-b">
                    <option value="0">Dirección</option>
                    @foreach ($addresses as $a)
                    <option value="{{$a->id}}">{{$a->title}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="name_client">Nombre</label>
                  <input type="text" class="form-control" id="name_delivery" disabled="true">
                </div>
                <div class="form-group">
                  <label for="phone_client">Teléfono</label>
                  <input type="text" class="form-control" id="phone_delivery" disabled="true">
                </div>
                <div class="form-group">
                  <label for="state_client">Dirección</label>
                  <input type="text" class="form-control mg-b" id="state_address_delivery" disabled="true">
                  <input type="text" class="form-control mg-b" id="address_delivery" placeholder="Dirección" disabled="true">
                  <textarea id="reference_delivery" class="form-control reference" placeholder="Referencia" disabled="true"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="b_step">
              <div class="b_step-head">
                <h4><span>3</span> RESUMEN</h4>
              </div>
              <div class="b_step-body">
                <table class="table table-resumen">
                  <tbody>
                    @foreach($productos as $p)
                    <tr>
                      <td class="td-product">
                        <div class="row col-product">
                          <div class="col-xs-2">
                            <div class="content-img">
                              <span class="cant">{{$p->count}}</span>
                              <img class="img-responsive" src="app/img/apple.png" alt="">
                            </div>
                          </div>
                          <div class="col-xs-6">
                            {{$p->name}}
                          </div>
                          <div class="col-xs-4 product-price text-right">
                            S/. {{$p->amount}}
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
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
                      <td>
                        <div class="clearfix">
                          <div class="pull-left">
                            Envio
                          </div>
                          <div class="pull-right" id="shipping_costs">
                            S/. 0.00
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
                          <div class="pull-right product-price" id="total">
                            S/. {{$cart->sub_total}}
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="td-button">
                        <input type="hidden" name="cart_id" value="{{$cart->id}}">
                        <button type="submit" id="send_button" class="btn-send-cart" disabled="true">
                          PROCESAR COMPRA
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  @stop
  @section('script1')
  <script src="{{asset('app/js/jquery-ui.js')}}"></script>
  @stop
  @section('script3')
  <script>
        $(function(){
          var sub_total = parseFloat({{$cart->sub_total}});
          var shipping = 0;
          var total = sub_total + shipping;
          calcular_shippint();
          $("#date_client").datepicker({
            minDate: 1,
            maxDate: 60,
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            dateFormat: 'dd/mm/yy',
            showMonthAfterYear: false,
            minDate: new Date()
          });
          $("#date_client").change(function(){
            var $date = $(this).val();
            $.ajax({
              type: "POST",
              url: '{{route('ajax_date_path')}}',
              data: {date:$date,_token:"<?php echo csrf_token(); ?>"},
              success: function($data){
                var $select = $('#state_client');
                $select.children().remove();
                $('#state_client').prop('disabled', false);
                $.each($data,function(index,value){
                  if(value == -1){
                    $('#state_client').append(new Option('No hay despacho',value,false,false));
                    $('#state_client').prop('disabled', 'disabled');
                  }
                  $('#state_client').append(new Option(value['start_time']+' - '+value['finish_time'],value['id'],false,false));
                });
                activeButton();
              },
              error: function($data){
                console.log($data);
              },
              dataType: 'json'
            });
          })
          $('#same_address').change(function(){
            if($(this).prop('checked')){
              $('#address_select_2').prop('disabled', 'disabled');
              $id = $("#address_select").val();
              $('#address_select_2').val($id);
              if($id != 0){
                delivery($id);
              }else{
                $('#name_delivery').val('');
                $('#phone_delivery').val('');
                $('#state_address_delivery').val('');
                $('#address_delivery').val('');
                $('#reference_delivery').val('');
              }
            }else{
              $('#address_select_2').prop('disabled', false);
            }
            activeButton();
          });
          $("#address_select").change(function(){
            var $id = $(this).val();
            if($id == 0){
              $('#name_address').val('');
              $('#phone_address').val('');
              $('#address').val('');
              $('#reference').val('');
              $('#state_address').val('');
            }else{
              $.ajax({
                type: "POST",
                url: '{{route('ajax_address_path')}}',
                data: {id:$id,_token:"<?php echo csrf_token(); ?>"},
                success: function($data){
                  $address = $data[0];
                  $('#name_address').val($address['name_address'] + ' ' + $address['last_name_address']);
                  $('#phone_address').val($address['phone']);
                  $('#address').val($address['address']);
                  $('#reference').val($address['reference']);
                  $('#state_address').val($address['states']['name']+' - '+$address['cities']['name']);
                },
                dataType: 'json'
              });
            }
            if($('#same_address').prop('checked')){
              $('#address_select_2').val($id);
              delivery($id);
            }
            activeButton();
          });
          $("#address_select_2").change(function(){
            var $id = $(this).val();
            if($id == 0){
              $('#name_delivery').val('');
              $('#phone_delivery').val('');
              $('#state_address_delivery').val('');
              $('#address_delivery').val('');
              $('#reference_delivery').val('');
            }else{
              delivery($id);
            }
            activeButton();
          });
          function calcular_shippint(){
            $('#shipping_costs').html('S/. '+parseFloat(shipping).toFixed(2));
            total = sub_total + shipping;
            $('#total').html('S/. '+ parseFloat(total).toFixed(2) );
          }
          function activeButton(){
            $primSelect = $("#address_select").val();
            $segSelect = $("#address_select_2").val();
            $fech = $("#date_client").val();
            $turn = $('#state_client').val();
            if($primSelect == 0 || $segSelect == 0 || $fech.localeCompare('') == 0 || $turn == null){
              $('#send_button').prop('disabled', 'disabled');
            }else{
              $('#send_button').prop('disabled', false);
            }
          }
          function delivery($id){
            if($id == 0){
              $('#name_delivery').val('');
              $('#phone_delivery').val('');
              $('#state_address_delivery').val('');
              $('#address_delivery').val('');
              $('#reference_delivery').val('');
            }else{
              $.ajax({
                type: "POST",
                url: '{{route('ajax_address_path')}}',
                data: {id:$id,_token:"<?php echo csrf_token(); ?>"},
                success: function($data){
                  $address = $data[0];
                  $('#name_delivery').val($address['name_address'] + ' ' + $address['last_name_address']);
                  $('#phone_delivery').val($address['phone']);
                  $('#state_address_delivery').val($address['states']['name']+' - '+$address['cities']['name']);
                  $('#address_delivery').val($address['address']);
                  $('#reference_delivery').val($address['reference']);
                  shipping = parseFloat($address['zones']['shipping_costs']['cost']);
                  calcular_shippint();
                  activeButton();
                },
                dataType: 'json'
              });
            }
          }
        });
      </script>
  @stop

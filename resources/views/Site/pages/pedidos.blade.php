@extends('Site.layout.template')

@section('content')
  <section class="section-checkout">
    <div class="container">

      <div class="text-center">
        <h1 class="title">Checkout</h1>
        <img src="app/img/mustache.png" alt="mustache">
      </div>
      <form action="" class="form-checkout">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="b_step">
              <div class="b_step-head">
                <h4><span>1</span> DATOS DEL CLIENTE</h4>
              </div>
              <div class="b_step-body">
                <div class="form-group">
                  <label for="name_client">Nombre</label>
                  <input type="text" class="form-control" id="name_client">
                </div>
                <div class="form-group">
                  <label for="email_client">Emails</label>
                  <input type="email" class="form-control" id="email_client">
                </div>
                <div class="form-group">
                  <label for="phone_client">Teléfono</label>
                  <input type="text" class="form-control" id="phone_client">
                </div>
                <div class="form-group">
                  <label for="state_client">Dirección</label>
                  <select name="" id="state_client" class="form-control mg-b">
                    <option value="">Distrito</option>
                    <option value="">Lima</option>
                    <option value="">SJL</option>
                    <option value="">Surco</option>
                    <option value="">Molina</option>
                  </select>
                  <input type="text" class="form-control mg-b" id="address_client" placeholder="Dirección">
                  <textarea name="" id="reference_client" class="form-control reference" placeholder="Referencia"></textarea>
                </div>
                <div class="form-group">
                  <label for="phone_client">Fecha</label>
                  <input type="text" class="form-control" id="date_client">
                </div>
                <div class="form-group">
                  <label for="state_client">Turno de Entrega</label>
                  <select name="" id="state_client" class="form-control">
                    <option value="">Mañana</option>
                    <option value="">Tarde</option>
                    <option value="">Noche</option>
                  </select>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="">
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
                  <label for="name_client">Nombre</label>
                  <input type="text" class="form-control" id="name_client">
                </div>
                <div class="form-group">
                  <label for="phone_client">Teléfono</label>
                  <input type="text" class="form-control" id="phone_client">
                </div>
                <div class="form-group">
                  <label for="state_client">Dirección</label>
                  <select name="" id="state_client" class="form-control mg-b">
                    <option value="">Distrito</option>
                    <option value="">Lima</option>
                    <option value="">SJL</option>
                    <option value="">Surco</option>
                    <option value="">Molina</option>
                  </select>
                  <input type="text" class="form-control mg-b" id="address_client" placeholder="Dirección">
                  <textarea name="" id="reference_client" class="form-control reference" placeholder="Referencia"></textarea>
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
                    </tr>
                    <tr>
                      <td class="td-button">
                        <button type="button" class="btn-send-cart">
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

  @section('script3')
  <script>
        $(function(){
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
        });
      </script>
  @stop

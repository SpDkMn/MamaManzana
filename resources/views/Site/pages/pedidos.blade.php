@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
  <div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-order">
    <div class="container">
      <div class="text-center">
        <h1 class="title">pedidos</h1>
      </div>
      <div class="description">
        <form action="" class="form-horizontal form-order">
          <img data-sr="enter left move 200px over .6s" class="leaf-1" src="app/img/leaf1.png" alt="leaf">
          <img data-sr="enter right move 200px over .6s" class="leaf-2" src="app/img/leaf2.png" alt="leaf">
          <div class="form-gp">
            <label for="first-name" class="control-label">Nombre:</label>
            <div class="col-form">
              <input type="text" class="form-control" id="first-name" name="first-name">
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Email:</label>
            <div class="col-form">
              <input type="email" class="form-control" id="email" name="email">
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Producto:</label>
            <div class="col-form">
              <select class="form-control">
                <option></option>
                <option>Manzana 1</option>
                <option>Manzana 2</option>
                <option>Manzana 3</option>
                <option>Manzana 4</option>
                <option>Manzana 5</option>
              </select>
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Cantidad:</label>
            <div class="col-form">
              <select class="form-control">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-gp">
            <label for="amount" class="control-label">Ocación:</label>
            <div class="col-form">
              <select class="form-control">
                <option></option>
                <option>Día de la Madre</option>
                <option>Día del Padre</option>
                <option>San Valentin</option>
                <option>Semana Pascua</option>
                <option>Navidad</option>
              </select>
            </div>
          </div>
          <div class="form-gp">
            <label for="repass" class="control-label">Fecha de Entrega</label>
            <div class="col-form">
              <div class="row">
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>Ene</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Abr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Ago</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dic</option>
                  </select>
                </div>
                <div class="col-xs-4">
                  <select class="form-control">
                    <option>2001</option>
                    <option>2002</option>
                    <option>2003</option>
                    <option>2004</option>
                    <option>2005</option>
                  </select>
                </div>
              </div>
            </div>
          </div> 
          <div class="form-gp">
            <label for="description" class="control-label">Comentario</label>
            <div class="col-form">
              <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
          </div> 
          <div class="form-gp">
            <div class="text-right">
              <button id="btn-pedido" type="submit" class="btn-send" href="#mpedido">ENVIAR</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="up-effect">
    <div class="container">
      <a class="btn-up" href="#">
        <i class="fa fa-chevron-up fa-lg"></i>
      </a>
    </div>
  </div>
  <div style="display:none">
    <div id="mpedido" class="mpedido">
      <h5 class="title">¡Gracias por tu pedido!</h5>
      <span class="line"></span>
      <p>En breve nos contactaremos contigo paraconfirmar tu pedido.</p>
    </div>
  </div>
  @stop

  @section('script')
  <script src="app/js/fancybox.js"></script>
  <script type="text/javascript">
    $(function(){
      $(".form-order").submit(function(e){
        e.preventDefault();
        /*var request = $.ajax({
          url: "pedido",
          method: "POST",
          data: { email : $("#epedido").val() },
          dataType: "html"
        });*/
         
        //request.success(function( msg ) {
          $.fancybox("success",{
            href: "#mpedido",
            'hideOnContentClick': true,
            padding : [0,0,0,0],
          });
          
        //});
         
        /*request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });*/
      });
    });
  </script>
  @stop
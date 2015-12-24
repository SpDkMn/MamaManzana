@extends('Site.layout.template')
@section('body')
  @include('Site.layout.nav')
<div class="bgall" style="background-image: url(app/img/bg_us.png)"></div>
  <section class="section-order-img">
    <div class="container">
      <div class="text-center">
        <h1 class="title">pedidos</h1>
      </div>
      <div class="description clearfix">
        <div class="img-order">
          <img src="app/img/imgslider.png" alt="">
        </div>
        <form action="" class="form-horizontal form-order">
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
              <button type="button" class="btn-send">ENVIAR</button>
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
  @stop
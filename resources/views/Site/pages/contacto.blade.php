@extends('Site.layout.template')
@section('content')
<section class="section-contact">
    <div class="container">
      <div class="text-center">
        <h1 class="title">Escribenos</h1>
        <img src="{{asset('app/img/mustache.png')}}" alt="mustache">
      </div>
      <div class="row content-contact">
        <div class="col-md-6">
          <br>
          <form action="" class="form-contact">
            <div class="form-group">
              <div class="col-form">
                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Nombre:" @if($currentUser) value="{{$currentUser->name}}" @endif>
              </div>
            </div>
            <!--div class="form-group">
              <div class="col-form">
                <input type="text" class="form-control" id="last-name" name="last-name"placeholder="Apellido:" @if($currentUser) value="{{$currentUser->name}}" @endif>
              </div>
            </div-->
            <div class="form-group">
              <div class="col-form">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email:" @if($currentUser) value="{{$currentUser->email}}" @endif>
              </div>
            </div>
            <div class="form-group">
              <div class="col-form">
                <select name="" id="" class="form-control">
                  <option value="0"> </option>
                  @foreach($cities as $city)
                  <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-form">
                <textarea class="form-control textar" id="message" name="message"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="text-center">
                <button type="button" class="btn-send">Enviar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 bor-left">
          <br>
          <div class="call-us">
            <h4>Correo:</h4>
            <p>{{$contactInformation->email}}</p>
            <br>
            <h4>Teléfono:</h4>
            <p>{{$contactInformation->phone}}<br>De Lunes a Sábado de 9:00am a 7:00pm</p>
            <br>
            <h4>Dirección:</h4>
            <p>{{$contactInformation->address}}</p>
          </div>
          <br>
        </div>
      </div>
    </div>
  </section>
@stop

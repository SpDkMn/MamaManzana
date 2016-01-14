@extends('Admin.layout.template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Información de contacto
    <small> --- </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Inicio</a></li>
    <li>Configuraciones</li>
    <li class="active">Información de contacto</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <!-- Acerca de nosotros box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <i class="fa fa-tty"></i>
          <h3 class="box-title">Información de contacto</h3>
        </div>
        <div class="box-body">
          @if(!empty(session('status_data')))
          <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-save"></i> ¡Datos Guardados!</h4>
            {{session('status_data')}}
          </div>
          @endif
          <form action="{{ route('admin_contact-information_patch_path')}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="email" class="col-sm-2">Correo</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$email}}">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-2">Teléfono</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-tty"></i></span>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" value="{{$phone}}">
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="col-sm-2">Dirección</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                <input type="text" class="form-control" id="address" name="address" placeholder="Dirección" value="{{$address}}">
              </div>
            </div>
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa un titulo" value="{{$title}}">
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción">{{$description}}</textarea>
            </div>
            <div class="form-group">
              <label for="keywords">Keywords</label>
              <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords" value="{{$keywords}}">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div><!-- /.box -->
    </section><!-- /.Left col -->
  </div><!-- /.row (main row) -->
</section><!-- /.content -->
@stop

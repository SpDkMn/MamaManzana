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
          <form>
            <div class="form-group">
              <label for="email" class="col-sm-2">Correo</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="phone" class="col-sm-2">Teléfono</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-tty"></i></span>
                <input type="text" class="form-control" id="phone" placeholder="Teléfono">
              </div>
            </div>
            <div class="form-group">
              <label for="address" class="col-sm-2">Dirección</label>
              <div class="input-group col-sm-10">
                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                <input type="text" class="form-control" id="address" placeholder="Dirección">
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div><!-- /.box -->
    </section><!-- /.Left col -->
  </div><!-- /.row (main row) -->
</section><!-- /.content -->
@stop

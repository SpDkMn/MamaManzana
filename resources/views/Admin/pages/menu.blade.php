@extends('Admin.layout.template')

@section('css-1')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Menú
    <small> --- </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-gears"></i> Inicio</a></li>
    <li>Configuraciones</li>
    <li class="active">Menú</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Menú</h3>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <form>
            <table class="table table-striped">
              <tr>
                <th style="width: 10px">Order</th>
                <th>Nombre</th>
                <th>url</th>
                <th style="width: 40px">Activo</th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="order" value="1"></td>
                <td><input type="text" class="form-control" id="name" value="Home"></td>
                <td>http://mamamanzana.com/home</td>
                <td><input type="checkbox" class="minimal"></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="order" value="2"></td>
                <td><input type="text" class="form-control" id="name" value="About us"></td>
                <td>http://mamamanzana.com/about-us</td>
                <td><input type="checkbox" class="minimal"></td>
	            </tr>
	            <tr>
                <td><input type="text" class="form-control" id="order" value="3"></td>
                <td><input type="text" class="form-control" id="name" value="Categories"></td>
                <td>http://mamamanzana.com/categories</td>
                <td><input type="checkbox" class="minimal"></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" id="order" value="4"></td>
                <td><input type="text" class="form-control" id="name" value="Orders"></td>
                <td>http://mamamanzana.com/orders</td>
                <td><input type="checkbox" class="minimal"></td>
              </tr>
            </table>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </section><!-- /.Left col -->
  </div><!-- /.row (main row) -->
</section><!-- /.content -->
@stop

@section('script-src')
<!-- iCheck 1.0.1 -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
@stop

@section('script-src-1')
<script type="text/javascript">
  $(function(){
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
  })
</script>
@stop

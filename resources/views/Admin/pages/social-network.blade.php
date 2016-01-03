@extends('Admin.layout.template')

@section('css-1')
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Redes Sociales
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i> Inicio</a></li>
            <li>Configuraciones</li>
            <li class="active">Redes Sociales</li>
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
                  <i class="fa fa-thumbs-up"></i>
                  <h3 class="box-title">Redes Sociales</h3>
                </div>
                <div class="box-body">
                  <form action="{{ route('admin_social-network_patch_path')}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                  <div class="form-group col-sm-12">
                  	<label for="url" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="url" name="url" placeholder="Ingresa tu dirección de Facebook" value="{{$url}}">
                    </div>
                    <input type="checkbox" id="active" name="active" class="minimal col-sm-1">
                  </div>
                  <!--div class="form-group col-sm-12">
                  	<label for="twitter" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="twitter" placeholder="Ingresa tu dirección de Twitter">
                    </div>
                    <input type="checkbox" class="minimal col-sm-1">
                  </div>
                  <div class="form-group col-sm-12">
                  	<label for="instagram" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="instagram" placeholder="Ingresa tu dirección de Instagram">
                    </div>
                    <input type="checkbox" class="minimal col-sm-1">
                  </div>
                  <div class="form-group col-sm-12">
                  	<label for="pinterest" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pinterest" placeholder="Ingresa tu dirección de Pinterest">
                    </div>
                    <input type="checkbox" class="minimal col-sm-1">
                  </div>
                  <div class="form-group col-sm-12">
                  	<label for="linkedin" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="linkedin" placeholder="Ingresa tu dirección de Linkedin">
                    </div>
                    <input type="checkbox" class="minimal col-sm-1">
                  </div>
                  <div class="form-group col-sm-12">
                  	<label for="youtube" class="col-sm-1 control-label"><a class="btn btn-social-icon btn-pinterest"><i class="fa fa-youtube-play"></i></a></label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="youtube" placeholder="Ingresa tu dirección  de Youtube">
                    </div>
                    <input type="checkbox" class="minimal col-sm-1">
                  </div-->
                  <div class="box-footer col-sm-12">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
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

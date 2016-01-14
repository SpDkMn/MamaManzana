@extends('Admin.layout.template')

@section('css-1')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Zonas de envío<small> --- </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-cubes"></i> Inicio</a></li>
    <li>Delivery</li>
    <li class="active">Zonas</li>
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
          <i class="fa fa-gears"></i>
          <h3 class="box-title">Editar Zona</h3>
        </div>
        <div class="box-body">
          <form action="{{ route('admin_update_zonas_path',$zonas->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label>Destino</label>
              <select class="form-control select2" name="city" style="width: 100%;">
                @foreach($cities as $c)
                  <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
              </select>
            </div><!-- /.form-group -->
            <div class="form-group">
              <label for="name">Nombre de la zona</label>
              <input type="text" class="form-control" value="{{$zonas->name}}" id="name" name="name" placeholder="Ingresa nombre de la categoria">
            </div>
            <div class="form-group">
              <label>Referencia</label>
              <textarea class="form-control" id="reference" name="reference" rows="3" placeholder="Escriba una referencia sobre la zona de envío.">{{$zonas->reference}}</textarea>
            </div>
            <div class="form-group">
              <label for="keywords">Flete</label>
              <input type="text" class="form-control" id="cost" name="cost" value="{{$zonas->shippingCosts->cost}}" placeholder="Flete">
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
@section('script-src-2')
<!-- Select2 -->
<script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>
@stop

@section('script-src-1')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
$(function() {
  $(".select2").select2();
  $('.select2').val("{{$zonas->city_id}}").change();
  CKEDITOR.replace('short_description');
})
</script>
@stop

@extends('Admin.layout.template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Slider<small> --- </small></h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-picture-o"></i> Inicio</a></li>
    <li class="active">Slider</li>
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
          <h3 class="box-title">Editar Slider</h3>
        </div>
        <div class="box-body">
          <form action="{{ route('admin_update_sliders_path',$slider->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa un titulo" value="{{$slider->title}}">
            </div>
            <div class="form-group">
              <label for="short_description">Descripción corta</label>
              <textarea id="short_description" name="short_description" rows="10" cols="80">{{$slider->short_description}}</textarea>
            </div>
            <div class="form-group">
              <label for="action">Acción</label>
              <input type="text" class="form-control" id="action" name="action" placeholder="Ingresa una acción" value="{{$slider->action}}">
            </div>
            <div class="form-group">
              <label for="slug">Url</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="Ingresa una url" value="{{$slider->slug}}">
            </div>
            <div class="form-group">
              <img src="{{asset("img/sliders/".$slider->img)}}">
              <label for="photo">Imagen</label>
              <input type="file" id="photo" name="photo">
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

@section('script-src-1')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
$(function() {
  CKEDITOR.replace('short_description');
})
</script>
@stop

@extends('Admin.layout.template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Categorias
    <small> --- </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin_dashboard_path') }}"><i class="fa fa-gears"></i> Inicio</a></li>
    <li>Categoria</li>
    <li class="active">Editar</li>
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
          <h3 class="box-title">Editar Categoria</h3>
        </div>
        <div class="box-body">
          <form action="{{ route('admin_update_category_path',$category->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="name">Nombre de la categoria</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Ingresa nombre de la categoria">
            </div>
            <div class="form-group">
              <label for="name">URL</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}" placeholder="Ingresa la url">
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción">{{$category->description}}</textarea>
            </div>
            <div class="form-group">
              <label>Descripción corta</label>
              <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Descripción corta">{{$category->short_description}}</textarea>
            </div>
            <div class="form-group">
              <label for="title">Titulo para la pagina</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$category->meta->title}}" placeholder="Ingresa el titulo de la categoria">
            </div>
            <div class="form-group">
              <label for="keywords">Palabras claves</label>
              <input type="text" class="form-control" id="keywors" name="keywords" value="{{$category->meta->keywords}}" placeholder="Ingresa las palabras claves de la categoria">
            </div>
            <div class="form-group">
              <label>Meta Descripción</label>
              <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Descripción">{{$category->meta->description}}</textarea>
            </div>
            <div class="form-group">
              <img src="{{asset("img/category/".$category->img->name)}}">
              <label for="img" class="col-lg-12">Foto</label>
              <input type="file" id="img" name="img">
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

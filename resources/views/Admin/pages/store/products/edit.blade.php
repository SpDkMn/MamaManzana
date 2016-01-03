@extends('Admin.layout.template')

@section('css-1')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Productos
    <small> --- </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin_dashboard_path') }}"><i class="fa fa-gears"></i> Inicio</a></li>
    <li>Producto</li>
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
          <h3 class="box-title">Editar Producto</h3>
        </div>
        <div class="box-body">
          <form action="{{ route('admin_update_product_path',$product->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="name">Nombre del producto</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Ingresa nombre del producto">
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
              <label>Descripción corta</label>
              <textarea class="form-control" id="short_description" name="short_description" rows="3" placeholder="Descripción corta">{{$product->short_description}}</textarea>
            </div>
            <div class="form-group">
              <label for="cost">Costo del producto</label>
              <input type="text" class="form-control" id="cost" name="cost" value="{{$product->cost}}" placeholder="Ingresa el costo del producto">
            </div>
            <div class="form-group">
              <label for="title">Titulo para la pagina</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$product->meta->title}}" placeholder="Ingresa el titulo del producto">
            </div>
            <div class="form-group">
              <label for="keywords">Palabras claves</label>
              <input type="text" class="form-control" id="keywors" name="keywords" value="{{$product->meta->keywords}}" placeholder="Ingresa las palabras claves del producto">
            </div>
            <div class="form-group">
              <label>Meta Descripción</label>
              <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Descripción">{{$product->meta->description}}</textarea>
            </div>
            <div class="form-group">
                  <label>Categorias</label>
                  <select class="form-control select2" name="categories[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    @foreach($categorias as $categoria)
                      <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                    @endforeach
                  </select>
                </div><!-- /.form-group -->
            <div class="form-group">
              <img src="{{asset("img/product/".$product->img->name)}}">
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
@section('script-src-2')
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>
@stop
@section('script-src-1')
    <script>
      $(function () {
        $(".select2").select2().select2('val',[@foreach($categ as $c) '{{$c}}', @endforeach]);
      });
    </script>
@stop

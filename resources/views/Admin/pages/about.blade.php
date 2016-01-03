@extends('Admin.layout.template')

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Acerca de nosotros
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i> Inicio</a></li>
            <li>Configuraciones</li>
            <li class="active">Acerca de nosotros</li>
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
                  <i class="fa fa-wrench"></i>
                  <h3 class="box-title">Acerca de nosotros</h3>
                </div>
                <div class="box-body">
                  @if(!empty(session('status_data')))
                  <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-save"></i> ¡Datos Guardados!</h4>
                    {{session('status_data')}}
                  </div>
                  @endif
                  <form action="{{ route('admin_about-us_patch_path')}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa un titulo" value="{{$about->title}}">
                    </div>
                    <div class="form-group">
                      <label for="about">Acerca de nosotros</label>
                      <textarea id="about" name="about" rows="10" cols="80">{{$about->about}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="mission">Misión</label>
                      <textarea id="mission" name="mission" rows="10" cols="80">{{$about->mission}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="vision">Visión</label>
                      <textarea id="vision" name="vision" rows="10" cols="80">{{$about->vision}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="values">Valores</label>
                      <input type="text" class="form-control" id="values" name="values" placeholder="Ingresa un titulo" value="{{$about->values}}">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div>
              </div><!-- /.box -->

            </section><!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

              <!-- Meta datos box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Meta datos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(!empty(session('status_meta')))
                  <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-save"></i> ¡Datos Guardados!</h4>
                    {{session('status_meta')}}
                  </div>
                  @endif
                  <form action="{{ route('admin_about-us_meta_patch_path')}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Ingresa un titulo" value="{{$about->meta->title}}">
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descripción">{{$about->meta->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="keywords">Keywords</label>
                      <input type="text" class="form-control" id="keywords" placeholder="Keywords" name="keywords" value="{{$about->meta->keywords}}">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section>
            <section class="col-lg-6 connectedSortable">

              <!-- About imagenes box -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <i class="fa fa-picture-o"></i>
                  <h3 class="box-title">Imagenes</h3>
                </div>
                <div class="box-body">
                  <img class="img-responsive pad" src="{{asset('img/about-us/'.$about->img->name)}}" alt="Photo">
                  <form action="{{ route('admin_about-us_img_patch_path')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                      <label for="photo">Foto</label>
                      <input type="file" id="photo" name="about_img">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </form>
                </div><!-- /.chat -->
              </div><!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
@stop

@section('script-src-1')
  <!-- CK Editor -->
  <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('about');
      CKEDITOR.replace('mission');
      CKEDITOR.replace('vision');
    });
  </script>
@stop

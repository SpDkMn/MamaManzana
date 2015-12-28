@extends('Admin.layout.template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Configuraciones
    <small> --- </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('admin_dashboard_path') }}"><i class="fa fa-gears"></i> Inicio</a></li>
    <li>Configuraciones</li>
    <li class="active">Configuraciones</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable">
      <!-- Acerca de nosotros box -->
      <div class="box box-success">
        <div class="box-header with-border">
          <i class="fa fa-gears"></i>
          <h3 class="box-title">Configuraciones</h3>
        </div>
        <div class="box-body">
          <form action="{{ route('admin_setting_patch_path')}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label for="email_order">Email</label>
              <input type="email" class="form-control" id="email_order" name="email_order" placeholder="Ingresa un titulo" value="{{$email_order}}">
            </div>
            <div class="form-group">
              <label for="phrase">Frase</label>
              <textarea class="form-control" id="phrase" name="phrase" rows="3" placeholder="phrase">{{$phrase}}</textarea>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
          <form action="{{ route('admin_setting_meta_patch_path')}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </section>
    <section class="col-lg-12 connectedSortable">
      <!-- About imagenes box -->
      <div class="box box-warning">
        <div class="box-header with-border">
          <i class="fa fa-picture-o"></i>
          <h3 class="box-title">Imagenes</h3>
        </div>
        <div class="box-body">
          <div class="col-lg-5">
	           <div class="col-lg-12">
	              <img class="img-responsive pad" src="{{asset('img/setting/'.$logo)}}" alt="Photo">
                <form action="{{ route('admin_setting_logo_patch_path')}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
  	              <div class="form-group">
                    <label for="logo" class="col-lg-12">Logo</label>
                    <input type="file" id="logo" name="logo">
	                </div>
	                 <button type="submit" class="btn btn-primary">Submit</button>
	              </form>
	            </div>
	            <div class="col-lg-3">
  	            <img class="img-responsive pad" src="{{asset('img/setting/'.$favicon)}}" alt="Photo">
                <form action="{{ route('admin_setting_favicon_patch_path')}}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
  	              <div class="form-group">
  	                <label for="favicon" class="col-lg-12">favicon</label>
	                  <input type="file" id="favicon" name="favicon">
	                </div>
	                <button type="submit" class="btn btn-primary">Submit</button>
	              </form>
	            </div>
	          </div>
            <div class="col-lg-7">
              <img class="img-responsive pad" src="{{asset('img/setting/'.$footer)}}" alt="Photo">
              <form action="{{ route('admin_setting_footer_patch_path')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="footer" class="col-lg-12">Foto</label>
                  <input type="file" id="footer" name="footer">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
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
      CKEDITOR.replace('phrase');
    });
  </script>
@stop

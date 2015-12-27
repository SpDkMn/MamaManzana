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
                  <form>
                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" class="form-control" id="title" placeholder="Ingresa un titulo">
                    </div>
                    <div class="form-group">
                      <label for="about">Acerca de nosotros</label>
                      <textarea id="about" name="about" rows="10" cols="80">
                        Aquí va el about
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="mission">Misión</label>
                      <textarea id="mission" name="mission" rows="10" cols="80">
                        Aquí va la misión
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="vision">Visión</label>
                      <textarea id="vision" name="vision" rows="10" cols="80">
                        Aquí va la visión
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="values">Valores</label>
                      <input type="text" class="form-control" id="values" placeholder="Ingresa un titulo">
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
                  <form>
                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" class="form-control" id="title" placeholder="Ingresa un titulo">
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control" id="description" rows="3" placeholder="Descripción"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="keywords">Keywords</label>
                      <input type="text" class="form-control" id="keywords" placeholder="Keywords">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
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
                  <img class="img-responsive pad" src="{{asset('dist/img/photo2.png')}}" alt="Photo">
                  <form>
                    <div class="form-group">
                      <label for="photo">Foto</label>
                      <input type="file" id="photo">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
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

@extends('Admin.layout.template')

@section('styles')
<style>
.color-palette {
  height: 35px;
  line-height: 35px;
  text-align: center;
}
.color-palette-set {
  margin-bottom: 15px;
}
.color-palette span {
  display: none;
  font-size: 12px;
}
.color-palette:hover span {
  display: block;
}
.color-palette-box h4 {
  position: absolute;
  top: 100%;
  left: 25px;
  margin-top: -40px;
  color: rgba(255, 255, 255, 0.8);
  font-size: 12px;
  display: block;
  z-index: 7;
}
</style>
@stop


@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Slider
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-picture-o"></i> Inicio</a></li>
            <li class="active">Slider</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- COLOR PALETTE -->
          <div class="box box-default color-palette-box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tag"></i> Vista Previa</h3>
            </div>
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide col-sm-12" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="http://placehold.it/1100x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                    <div class="carousel-caption">First Slide</div>
                  </div>
                  <div class="item">
                  	<img src="http://placehold.it/1100x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                    <div class="carousel-caption">Second Slide</div>
                  </div>
                  <div class="item">
                  	<img src="http://placehold.it/1100x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                    <div class="carousel-caption">Third Slide</div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </section><!-- /.content -->

        <section class="content connectedSortable">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Sliders</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <form>
                    <table class="table table-striped">
                      <tr>
                        <th>Titulo</th>
                        <th>Acción</th>
                        <th>url</th>
                        <th style="width: 10px">Activo</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>Manzana 1</td>
                        <td>Comprar</td>
                        <td>
                          http://mamamanzana.com/home
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td>
                        	<button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                        	<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Manzana 2</td>
                        <td>Ver más</td>
                        <td>
                          http://mamamanzana.com/home
                        </td>
                        <td><i class="fa fa-close"></i></td>
                        <td>
                        	<button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                        	<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                      </tr>
                    </table>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->

            <section class="content connectedSortable">

              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Slider</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form>
                    <div class="form-group">
                      <label for="title">Titulo</label>
                      <input type="text" class="form-control" id="title" placeholder="Ingresa un titulo">
                    </div>
                    <div class="form-group">
                      <label for="short_description">Descripción corta</label>
                      <textarea id="short_description" name="short_description" rows="10" cols="80">
                        Aquí va la descripción corta
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="photo">Foto</label>
                      <input type="file" id="photo">
                    </div>
                    <div class="form-group">
                      <label for="action">Acción</label>
                      <input type="text" class="form-control" id="action" placeholder="Ingresa una acción">
                    </div>
                    <div class="form-group">
                      <label for="slug">Url</label>
                      <input type="text" class="form-control" id="slug" placeholder="Ingresa una url">
                    </div>
                    <div class="form-group">
                      <label for="active">Activo</label>
                      <input type="checkbox" id="active" class="minimal">
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </section><!-- /.Left col -->
@stop


@section('script-src-1')
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('short_description');
  });
</script>
@stop

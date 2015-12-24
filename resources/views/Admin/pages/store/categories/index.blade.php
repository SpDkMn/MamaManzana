@extends('Admin.layout.template')

@section('css-1')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Categorias
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-cubes"></i> Inicio</a></li>
            <li>Almacen</li>
            <li class="active">Categorias</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <button class="btn btn-primary"><i class="fa fa-plus"></i> Nueva Categoria</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Activo</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td><img src="dist/img/photo2.png" width="80px"></td>
                        <td><i class="fa fa-check"></i><i class="fa fa-close"></i></td>
                        <td style="text-align: center;text-align: -webkit-center;">
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger" data-toggle="modal" data-target="#modal1"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@endsection

@section('script-src-2')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
@endsection

@section('script-src-1')
    <script>
      $(function () {
        $('#example1').DataTable();
      });
    </script>
@endsection

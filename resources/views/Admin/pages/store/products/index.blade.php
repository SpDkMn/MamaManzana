@extends('Admin.layout.template')

@section('css-1')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Productos
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-cubes"></i> Inicio</a></li>
            <li>Almacen</li>
            <li class="active">Productos</li>
          </ol>
        </section>

        <!-- Main content -->
        <div id='modales'></div>
        @include('Admin.pages.store.products.modal_new')
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new"><i class="fa fa-plus"></i> Nuevo Producto</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="product-data" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th>Imagen</th>
                        <th>Activo</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@endsection

@section('script-src-2')
    <!-- Select2 -->
    <script src="{{asset('plugins/select2/select2.full.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
@endsection

@section('script-src-1')
    <script>
      $(function () {
        $(".select2").select2();
        $('#product-data').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! route('admin_product_data_path') !!}',
          columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'cost', name: 'cost' },
            { data: 'img', name: 'img' },
            { data: 'active', name: 'active' },
            { data: 'action', name: 'action' }
          ]
        });
        $(document).on('click', '.delete',function (e) {
          $('#modales').empty();
          $.get(
            '{{route('admin_delete_product_path')}}',
            {id:$(this).data('id')},
            function(htmlexterno){
              $("#modales").html(htmlexterno);
              $('#modal-delete').toggle();
              $(document).on('click', '.close-delete',function (e) {
                $('#modal-delete').toggle();
                $('#modales').empty();
              });
            });
          });
      });
    </script>
@endsection

@extends('Admin.layout.template')

@section('css')
<!-- iCheck -->
<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Mensaje
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-envelope"></i> Inicio</a></li>
    <li>Bandeja de entrada</li>
    <li class="active">Mensaje</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <a href="{{ route('admin_inbox_compose_path') }}" class="btn btn-primary btn-block margin-bottom">Redactar</a>
      <div class="box box-solid">
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ route('admin_inbox_path') }}"><i class="fa fa-inbox"></i> Recibidos <span class="label label-primary pull-right">{{$count}}</span></a></li>
            <li><a href="{{ route('admin_inbox_path') }}"><i class="fa fa-envelope-o"></i> Enviados</a></li>
            <li><a href="#"><i class="fa fa-trash-o"></i> Papelera</a></li>
          </ul>
        </div><!-- /.box-body -->
      </div><!-- /. box -->
    </div><!-- /.col -->
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Mensaje</h3>
          <div class="box-tools pull-right">
            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body no-padding">
          <div class="mailbox-read-info">
            <h3>{{$contact->subject}}</h3>
            <h5>De: {{$contact->from}} ({{$contact->from_name}})<span class="mailbox-read-time pull-right">{{$contact->created_at}}</span></h5>
          </div><!-- /.mailbox-read-info -->
          <div class="mailbox-controls with-border text-center">
            <div class="btn-group">
              <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Papelera"><i class="fa fa-trash-o"></i></button>
              <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Responder"><i class="fa fa-reply"></i></button>
            </div><!-- /.btn-group -->
          </div><!-- /.mailbox-controls -->
          <div class="mailbox-read-message">
            {{$contact->message}}
          </div><!-- /.mailbox-read-message -->
        </div><!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <button class="btn btn-default"><i class="fa fa-reply"></i> Responder</button>
          </div>
          <button class="btn btn-default"><i class="fa fa-trash-o"></i> Papelera</button>
        </div><!-- /.box-footer -->
      </div><!-- /. box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@stop

@section('script-src')
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
@stop

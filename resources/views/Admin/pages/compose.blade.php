@extends('Admin.layout.template')

@section('css')
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Redactar
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-envelope"></i> Inicio</a></li>
    <li>Bandeja de entrada</li>
    <li class="active">Redactar</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <a href="#" class="btn btn-primary btn-block margin-bottom disabled">Redactar</a>
      <div class="box box-solid">
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ route('admin_inbox_path') }}"><i class="fa fa-inbox"></i> Recibidos <span class="label label-primary pull-right">12</span></a></li>
            <li><a href="{{ route('admin_inbox_path') }}"><i class="fa fa-envelope-o"></i> Enviados</a></li>
            <li><a href="#"><i class="fa fa-trash-o"></i> Papelera</a></li>
          </ul>
        </div><!-- /.box-body -->
      </div><!-- /. box -->
    </div><!-- /.col -->
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Redactar nuevo mensaje</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <input class="form-control" placeholder="To:">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Subject:">
          </div>
          <div class="form-group">
            <textarea id="compose-textarea" class="form-control" style="height: 300px">
              <h1><u>Heading Of Message</u></h1>
              <h4>Subheading</h4>
              <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>
              <ul>
                <li>List item one</li>
                <li>List item two</li>
                <li>List item three</li>
                <li>List item four</li>
              </ul>
              <p>Thank you,</p>
              <p>John Doe</p>
            </textarea>
          </div>
          <div class="form-group">
            <div class="btn btn-default btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <input type="file" name="attachment">
            </div>
            <p class="help-block">Max. 32MB</p>
          </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
          </div>
          <button class="btn btn-default"><i class="fa fa-times"></i> Descartar</button>
        </div><!-- /.box-footer -->
      </div><!-- /. box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@stop

@section('script-src')
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
@stop

@section('script-src-1')
<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Page Script -->
<script>
$(function () {
  //Add text editor
  $("#compose-textarea").wysihtml5();
});
</script>
@stop

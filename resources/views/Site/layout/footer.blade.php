<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="text-center">
        <?= $setting->phrase; ?>
      </div>
      <img class="img-responsive" src="{{asset('img/setting/'.$setting->footer)}}" alt="">
    </div>
  </div>
  <div class="footer-bottom">
    <div class="clearfix">
      <ul class="nav nav_manzana">
        <li @if(Request::is('/') )class="active"@endif><a href="{{route('home_path')}}">INICIO</a></li>
        <li @if(Request::is('nosotros') )class="active"@endif><a href="{{route('nosotros_path')}}">NOSOTROS</a></li>
        <li @if(Request::is('categorias') )class="active"@endif><a href="{{route('category_path')}}">CATEGORIAS</a></li>
        <li><a href="pedidos.html">PEDIDOS</a></li>
        <li @if(Request::is('contacto') )class="active"@endif><a href="{{route('contact_path')}}">CONTACTO</a></li>
      </ul>
      <img class="img-responsive" src="app/img/mustache-w.png" alt="">
    </div>
    <ul class="nav nav_social">
      @foreach($socialNetwork as $sn )
      <li><a href="{{$sn->url}}" target="_blank"><i class="fa fa-{{$sn->name}}-square"></i></a></li>
      @endforeach
    </ul>
    <h5 class="copy-right">© 2016 Mamá Manzana. Todos los derechos reservados.</h5>
  </div>
</footer>

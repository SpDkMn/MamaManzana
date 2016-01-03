<?php
use App\Http\Requests;
 ?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Panel Administrativo</li>
      <li
      @if(Request::is('admin') || Request::is('admin/dashboard'))
        class="active"
      @endif
      >
        <a href="{{route('admin_dashboard_path')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview
      @if(Request::is('admin/orders') || Request::is('admin/orders-status'))
        active
      @endif
      >
      ">
        <a href="#">
          <i class="fa fa-shopping-cart"></i>
          <span>Pedidos</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li
          @if(Request::is('admin/orders') )
            class="active"
          @endif
          ><a href="route('admin_orders_path')"><i class="fa fa-circle-o"></i> Pedidos</a></li>
          <li
          @if(Request::is('admin/orders-status') )
            class="active"
          @endif
          ><a href="route('admin_orders-status_path')"><i class="fa fa-circle-o"></i> Estado de pedidos</a></li>
        </ul>
      </li>
      <li
      @if(Request::is('admin/inbox/*') || Request::is('admin/inbox'))
        class="active"
      @endif
      >
        <a href="{{ route('admin_inbox_path') }}">
          <i class="fa fa-envelope"></i> <span>Mensajes</span>
          <small class="label pull-right bg-yellow">12</small>
        </a>
      </li>
      <li class="treeview
      @if(Request::is('admin/categories') || Request::is('admin/products'))
        active
      @endif
       ">
        <a href="#">
          <i class="fa fa-cubes"></i> <span>Almacen</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li
          @if(Request::is('admin/categories'))
            class="active"
          @endif
          ><a href="{{ route('admin_categories_path') }}"><i class="fa fa-circle-o"></i> Categorias</a></li>
          <li
          @if(Request::is('admin/products'))
            class="active"
          @endif
          ><a href="{{route('admin_products_path')}}"><i class="fa fa-circle-o"></i> Productos</a></li>
        </ul>
      </li>
      <li
      @if(Request::is('admin/sliders'))
        class="active"
      @endif
      >
        <a href="{{route('admin_sliders_path')}}">
          <i class="fa fa-picture-o"></i> <span>Sliders</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Delivery</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Zonas</a></li>
          <li>
            <a href="#"><i class="fa fa-circle-o"></i> Calendario de envios <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Turnos</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Fechas especiales</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Feriados</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li
      @if(Request::is('admin/users'))
        class="active"
      @endif
      >
        <a href="{{route('admin_users_path')}}">
          <i class="fa fa-group"></i> <span>Usuarios</span>
        </a>
      </li>
      <li class="treeview
      @if(Request::is('admin/about-us') || Request::is('admin/contact-information')
       || Request::is('admin/menu') || Request::is('admin/settings')
       || Request::is('admin/social-network'))
        active
      @endif
      ">
        <a href="#">
          <i class="fa fa-gears"></i> <span>Configuraciones</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li
          @if(Request::is('admin/settings'))
            class="active"
          @endif
          ><a href="{{ route('admin_settings_path') }}"><i class="fa fa-circle-o"></i> Configuraciones</a></li>
          <li
          @if(Request::is('admin/about-us'))
            class="active"
          @endif
          ><a href="{{ route('admin_about-us_path') }}"><i class="fa fa-circle-o"></i> Acerca de nosotros</a></li>
          <li
          @if(Request::is('admin/contact-information'))
            class="active"
          @endif
          ><a href="{{ route('admin_contact-information_path')}}"><i class="fa fa-circle-o"></i> Información de contacto</a></li>
          <li
          @if(Request::is('admin/social-network'))
            class="active"
          @endif
          ><a href="{{ route('admin_social-network_path')}}"><i class="fa fa-circle-o"></i> Redes Sociales</a></li>
          <!--li
          @if(Request::is('admin/menu'))
            class="active"
          @endif
          ><a href="{{ route('admin_menu_path') }}"><i class="fa fa-circle-o"></i> Menu</a></li-->
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

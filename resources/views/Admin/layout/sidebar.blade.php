<?php
use App\Http\Requests;
 ?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Panel Administrativo</li>
      <li
      @if(Request::is('/') || Request::is('dashboard'))
        class="active"
      @endif
      >
        <a href="/">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-shopping-cart"></i>
          <span>Pedidos</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Pedidos</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Estado de pedidos</a></li>
        </ul>
      </li>
      <li
      @if(Request::is('inbox'))
        class="active"
      @endif
      >
        <a href="inbox">
          <i class="fa fa-envelope"></i> <span>Mensajes</span>
          <small class="label pull-right bg-yellow">12</small>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-cubes"></i> <span>Almacen</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Categorias</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Productos</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-picture-o"></i> <span>Sliders</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Delivery</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Paises</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Estados</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Ciudad</a></li>
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
      <li>
        <a href="#">
          <i class="fa fa-group"></i> <span>Usuarios</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i> <span>Configuraciones</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Configuraciones</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Acerca de nosotros</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Información de contacto</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Redes Sociales</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Menu</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

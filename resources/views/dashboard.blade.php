<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{ Auth::user()->roles[0]->Nombre }} | Ecommerce</title>
      <script src="/js/popper.min.js"></script>
      
      <link rel="shortcut icon" href="{{ asset('/img/logo-tienda-online-2.png') }}">

      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">

      <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
      <!-- Boton flotante -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      <!--fin boton flotante-->
      <div class="container">
        <a class="navbar-brand" href="{{ route('/') }}">
          <img src="/img/logo-tienda-online-2.png" widht="80" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--Navbar de lado izquierdo -->
          <ul class="navbar-nav mr-auto">
            
          </ul>
          <!--Fin Navbar izquierdo-->
        <!--Navbar del lado derecho-->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-comment-alt"></i>
                <span class="badge bg-secondary"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                
                <li><a class="dropdown-item" href="#">Mensaje</a></li>

              </ul>
            </li>
          </ul>
          <!--Fin navbar derecho-->
        </div>
      </div>   
  </nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!--Logo -->
      <a href="#" class="brand-link text-center">
        <i class="fas fa-user-shield"></i>
        <span class="brand-text font-weight-light" >{{ Auth::user()->name }}</span>
      </a>
    <!--finlogo-->

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->        
          <li class="nav-item">
            <a href="{{ url('cuenta/'.Auth::user()->roles[0]->Nombre.'')}}" class="nav-link" id="configuraciones">
            <i class="fas fa-tachometer-alt"></i>
              <p>
                Tablero
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#usuario" id="btnNuevoUsuario">
                  <i class="fas fa-user-plus"></i>
                  <p>Nuevo</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-id-card"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-bullhorn"></i>
              <p>
                Publicidad
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#usuario" id="btnNuevoUsuario">
                  <i class="fas fa-plus-circle"></i>
                  <p>Nueva</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-pen-square"></i>
                  <p>Actualizar</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-sitemap nav-icon"></i>
              <p>
                Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#categoria" id="btnNuevaCategoria">
                  <i class="fas fa-plus"></i>
                  <p>Nueva</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ url('categoria') }}" class="nav-link" id="verCateogiras">
                <i class="far fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-boxes"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-plus-square"></i>
                  <p>Nuevo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-edit"></i>
                  <p>Actualizar</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="far fa-handshake"></i>
              <p>
                Pagos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-money-check-alt"></i>
                  <p>ver</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('configUser') }}"class="nav-link" id="configuraciones">
              <i class="fas fa-wrench"></i>
              <p>
                Configuraciones
              </p>
            </a>
          </li>
          <li class="header">...</li>
          <li class="nav-item">
            <a class="nav-link" href="#"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                  <p>
                    Cerrar sesión
                  </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
           @include('tableroApp')
         
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row" id="central">
          
            @yield('content-tab')
          
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">Comercio electronico</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- modalCategoria-->
  @include('categorias.modalCategoria')
<!--finModlaCategoria-->

<!--modaUsuario-->
  @include('usuarios.modalUsuarios')
<!--finModalUsuario-->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!--Axios-->
<script src="/js/axios.min.js"></script>
<!--categoria-->
<script src="/js/httpJS/categorias.js"></script>
<script src="/js/httpJS/configuraciones.js"></script>
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Metas Fisicas Red Cusco Norte</title>

    </head>
    <body class="hold-transition sidebar-mini">
      <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars fa-2x"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('/')}}" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('productos')}}" class="nav-link">Productos</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('subproductos')}}" class="nav-link">Sub Productos</a>
            </li>
            
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">Metas Fisicas SIGA-PPR</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                      <a href="{{url('view_prd_micro_redes')}}" class="nav-link">
                        <i class="far fa-hospital fa-2x"></i>
                        <p>Por Producto/Micro Red</p>
                      </a>
                </li>

                <li class="nav-item">
                      <a href="{{url('view_sub_micro_redes')}}" class="nav-link">
                        <i class="far fa-hospital fa-2x"></i>
                        <p>Por Sub Producto/Micro Red</p>
                      </a>
                </li>

                <li class="nav-item">
                      <a href="{{url('view_prd_eess')}}" class="nav-link">
                        <i class="fas fa-home fa-2x"></i>
                        <p>Por Producto/EESS</p>
                      </a>
                </li>

                <li class="nav-item">
                      <a href="{{url('view_sub_eess')}}" class="nav-link">
                        <i class="fas fa-home fa-2x"></i>
                        <p>Por Sub Producto/EESS</p>
                      </a>
                </li>

                
                
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <section class="content">
            <div class="container">
                  @yield('content')
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2018 <a href="http://www.redcusconorte.gob.pe">Red Cusco Norte</a>.</strong>
          Todos los derechos reservados.
          <div class="float-right d-none d-sm-inline-block">
            <b>Ing. Abel Laurente</b>
          </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
<!-- ./wrapper -->

    <script src="{{ asset('js/app.js') }}"></script>
        
    </body>
</html>

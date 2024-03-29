<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }}</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
  <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alertify.css') }}" rel="stylesheet">
    <link href="{{ asset('css/semantic.css') }}" rel="stylesheet">
  @livewireStyles  
</head>
<body class="hold-transition sidebar-mini sidebar-collapse ">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
    <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      -->
      <!-- Messages Dropdown Menu
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="{{ asset('adminlte/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="{{ asset('adminlte/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            
            <div class="media">
              <img src="{{ asset('adminlte/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      <!--
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fa fa-user"></i><i class="fa fa-caret-down"></i> 
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('/') }}" class="brand-link">
      <!--
      <img src="{{ asset('adminlte/img/help_desk_logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      -->
      <span class="brand-text font-weight-bold">Papa Johns's | Help Desk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(Auth::user()->image == 'perfil.png')
            <img src="{{ asset('img/'.Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image"  width="60" height="60" />
          @else
            <img src="{{ asset('storage/user_images/'.Auth::user()->image) }}" class="img-circle elevation-2" alt="User Image"  width="60" height="60" />
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name.' '.Auth::user()->middle_name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ asset('app/help_desk.apk') }}" target="_blank" class="nav-link active">
                  <i class="nav-icon fa fa-mobile"></i>
                  <p>App</p>
                </a>
            </li>
            <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Casos
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('cases') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Todos</p>
                </a>
              </li>
              @if(Auth::user()->user_rol_id == 1 || Auth::user()->user_rol_id == 2)
              <li class="nav-item">
                <a href="{{ route('cases_unassigned') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sin asignar</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{ route('cases_p') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cases_e') }}"class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>En progreso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('cases_c') }}"class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrados</p>
                </a>
              </li>

            </ul>
          </li>
            <!--
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-archive"></i>
                  <p>Inventario</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-life-ring"></i>
                  <p>Soporte</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-briefcase"></i>
                  <p>Proyectos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-wrench"></i>
                  <p>Herramientas</p>
                </a>
            </li>
            -->
    <!--
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          -->
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
           @yield('page_title')
            </h1>
          </div><!-- /.col -->
          <!--
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>
          -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    @yield('content')
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">

      @if(Auth::user()->user_rol_id == 1)
      <a href="{{ route('companies') }}">
        <i class="fa fa-building"></i>  Empresas
      </a><br/><br/>
      <a href="{{ route('company_branches') }}">
        <i class="fa fa-industry"></i>  Sucursales
      </a><br/><br/>
      <a href="{{ route('users') }}">
        <i class="fa fa-users"></i>  Usuarios
      </a><br/><br/>
      <a href="{{ route('service_areas') }}">
        <i class="fa fa-cog"></i>  Áreas de servicio
      </a><br/><br/>
      <a href="{{ route('service_types') }}">
        <i class="fa fa-cog"></i>  Tipos de servicio
      </a><br/><br/>
      <a href="{{ route('service_categories') }}">
        <i class="fa fa-cog"></i>  Categorías de servicio
      </a><br/><br/>
      <a href="{{ route('service_simptoms') }}">
        <i class="fa fa-cog"></i>  Síntomas de servicio
      </a><br/><br/>
      <a href="{{ route('service_suggestion') }}">
        <i class="fa fa-cog"></i>  Sugerencias de servicio
      </a><br/><br/>
      @endif

      <a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        <i class="fa fa-user-circle"></i>  Cerrar sesión
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
      </form>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Help Desk V. 1.0.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }}  <a href="#"> DOTECH</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<audio id="ws_open" preload="auto">
        <source src="{{ asset('sound/ws_iphone.mp3') }}" type="audio/mp3">
</audio>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Slider Images -->
<script type="text/javascript"src="https://slideshow.triptracker.net/slide.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
@livewireScripts
<script src="{{ asset('js/alertify.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = false;

    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
      cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
    });
    var channel = pusher.subscribe('user-{{ Auth::user()->id }}-channel');

    channel.bind('nuevo_seguimiento', function(data) {
        recargarSeguimientos(data.message.extra.case_id);
    });

    channel.bind('message', function(data) {
      successNotification(data.message.message);
    });

    channel.bind('updateFollowBox', function(data) {
      console.log(data);
      updateFollowBox(data.message.extra.case_id);
    });
    


</script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>QuoCaly</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/Icono2.png">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700') }}" rel="stylesheet">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i') }}" rel="stylesheet">
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/resume.min.css ')}}" rel="stylesheet">

  <!-- fullCalendar -->
  <link href="{{asset('fullcalendar/core/main.css')}}" rel='stylesheet' />
  <link href="{{asset('fullcalendar/daygrid/main.css')}}" rel='stylesheet' />
  <link href="{{asset('fullcalendar/timegrid/main.css')}}" rel='stylesheet' />
  <link href="{{asset('fullcalendar/list/main.css')}}" rel='stylesheet' />




  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  @yield('style')
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/pedircita">Citas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/usuarios">Listar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#productos">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#clientes">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#empleados">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="/home"><i class="fas fa-home"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="content" class="p-4 p-md-5">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h3>QuoCaly</h3>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user"></i> <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="text-center">{{ Auth::user()->name }}</div>
                <hr>
                <div class="text-center"> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    {{ __('Logout') }}
                  </a></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      @yield("content")

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js ')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js ')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('js/resume.min.js ')}}"></script>

    <!-- fullCalendar -->
    <script src="{{asset('fullcalendar/core/main.js')}}"></script>
    <script src="{{asset('fullcalendar/daygrid/main.js')}}"></script>
    <script src="{{asset('fullcalendar/timegrid/main.js')}}"></script>
    <script src="{{asset('fullcalendar/list/main.js')}}"></script>
    <script src="{{asset('fullcalendar/interaction/main.js')}}"></script>



    <!-- js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    @yield('script')

</body>

</html>
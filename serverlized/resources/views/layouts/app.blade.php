<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand " href="#">Server<strong>lized</strong></a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active  ">
          <a class="nav-link" href="#"><i class="fa fa-home mr-1"></i> Dashboard</a>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-users mr-2"></i> Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-server mr-2"></i> Active Servers</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-credit-card mr-2"></i> Transactions</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-life-ring mr-2"></i> Support Ticket</a>
        </li>
  
      </ul>
      <!-- Links -->
  
      <form class="form-inline">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
      </form>
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

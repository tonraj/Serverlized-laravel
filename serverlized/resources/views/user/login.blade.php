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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <!-- Material form login -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4 mb-4">
<strong>Register</strong>
</h5>


<div class="card-body px-lg-5 pt-0">

    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif
    
<form   class="text-center" style="color: #757575;" method="post">



<div class="form-group">
  <input name="email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
</div>

<div class="form-group">
    {{csrf_field()}}
    <input name="password" type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
 
</div>
 
 

  <!-- Sign in button -->
  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>

  <!-- Register -->
  <p>Not a member?
    <a href="">Register</a>
  </p>

  <!-- Social login -->
  <p>or sign up with:</p>
  <a type="button" class="btn-floating btn-fb btn-sm">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a type="button" class="btn-floating btn-tw btn-sm">
    <i class="fab fa-twitter"></i>
  </a>
  <a type="button" class="btn-floating btn-li btn-sm">
    <i class="fab fa-linkedin-in"></i>
  </a>
  <a type="button" class="btn-floating btn-git btn-sm">
    <i class="fab fa-github"></i>
  </a>

</form>
<!-- Form -->

</div>

</div>
<!-- Material form login -->
        </div>
    </div>
</div>
</main>
</div>
</body>
</html>

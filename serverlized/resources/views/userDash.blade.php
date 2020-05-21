
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Co6cf72BpZ86X83ihZ57F4WPpN3EJxYdzPWclAFn">

    <title>Laravel</title>

    
    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/mdb.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="app">

      
      <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
  <a class="navbar-brand" href="#">Serverlized</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      
    
      <div class="d-flex change-mode">

       
        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown notifications-nav">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="badge red">3</span> <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item waves-effect waves-light" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
              </a>
              <a class="dropdown-item waves-effect waves-light" href="#">
                <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                <span>New order received</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
              </a>
              <a class="dropdown-item waves-effect waves-light" href="#">
                <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                <span>Your campaign is about to end</span>
                <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
              </a>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item waves-effect waves-light" href="#">Log Out</a>
              <a class="dropdown-item waves-effect waves-light" href="#">My account</a>
            </div>
          </li>

        </ul>
        <!-- Navbar links -->

      </div>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

  <div class="container my-5">
    <router-view ></router-view>
  </div>


  

</main>
</div>
</body>
  

</html>

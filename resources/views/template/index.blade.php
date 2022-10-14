<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/" class="nav-link active" aria-current="page">Login</a>
        </li>
        <li class="nav-item">
          <a href="/register" class="nav-link active" aria-current="page">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>
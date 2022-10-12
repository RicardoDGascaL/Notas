<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar bg-primary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <button class="btn btn-outline-success" type="submit"></button>
    </form>
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
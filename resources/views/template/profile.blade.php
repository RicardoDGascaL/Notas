<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
      a{
        text-decoration: none;
      }
    </style>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/perfil" class="nav-link active text-light" aria-current="page">Mis Notas</a>
        </li>
        <li class="nav-item">
          <a href="/create" class="nav-link active text-light" aria-current="page"> Crear Notas</a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger mx-2">Cerrar Sesión</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('content')
</body>
</html>
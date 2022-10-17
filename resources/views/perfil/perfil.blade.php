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
  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <button  class="btn btn-danger mx-2">Cerrar Sesión</button>
          <h2  class="mx-5 text-center">My Perfil</h2>
      </div>
    </nav>
  </div>
  <div class="container-fliud my-5">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded bg-light">
            <div class="container mt-5">
              <div class="row justify-content-center">
                <div class="col-4">
                  <h1 class="col align-self-center">Notas</h1>
                </div>
              </div>
            </div>
            <form action="" method="POST" class="bordered shadow border-radius p-4">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group mt-4">
                      <label for="titulo">Titulo Nota :</label>
                      <input type="text" name="titulo" class="form-control mt-2" placeholder="titulo" id="titulo">
                  </div>
                  <div class="form-group mt-4">
                      <label for="Descripcion">Descripcion : </label>
                      <input type="text" name="Descripcion" class="form-control mt-2 py-5" placeholder="descripcion" id="descripcion">
                  </div>
                  <div class="form-group mt-4">
                        <button type="submit" class="btn btn-success px-5 py-2 my-2">Agregar Nota</button>
                    </div>
                </div>
              </div>
            </form>
          </div>
          <div class="container-fluid my-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded border-secondary bg-secondary">
              <div class="row">
                <div class="container-fluid mt-5 text-light">
                  <div class="row">
                    <h2 class="text-center">Tarea</h2>
                    <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed doloribus laborum enim molestiae quas consequuntur corrupti, animi hic deserunt? Fugit necessitatibus suscipit quo? Harum facere vero eligendi voluptatum quibusdam.</p>
                    <div class="col">
                      <button class="btn btn-danger px-3 py-2 mx-3 my-3">Eliminar</button>
                      <button class="btn btn-primary px-3 py-2 mx-3 my-3">Actualizar</button>
                    </div>
                    <ul>
                      @forelse($portafolio as $portafolioItem)
                        <h2> {{ $portafolioItem ->title }}</h2>
                        <p> {{ $portafolioItem ->descripcion }}</p>
                        @empty
                          <p>No hay proyectos mostrados</p>
                      @endforelse
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
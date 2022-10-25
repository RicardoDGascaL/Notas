@extends('template.profile')
@section('title','Crear Nota')
@section('content')
<div class="container-fliud my-5">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded bg-light">
            <div class="container mt-5">
              <div class="row justify-content-center">
                <div class="col-4">
                  <h1 class="col align-self-center"> Editar Nota</h1>
                </div>
              </div>
            </div>
            <form action="{{ route('perfil.update', $nota) }}" method="POST" class="bordered border-radius p-4">
                @csrf @method('PATCH')
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group mt-4">
                      <label for="title">Titulo Nota :</label>
                      <input type="text" name="title" class="form-control mt-2" value="{{ $nota->title }}" placeholder="titulo" id="title" required>
                  </div>
                  <div class="form-group mt-4">
                      <label for="Descripcion">Descripcion : </label>
                      <input type="text" name="descripcion" class="form-control mt-2 py-5" value="{{ $nota->descripcion }}" placeholder="descripcion" id="descripcion" required>
                  </div>
                  <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2 my-2">Agregar cambios</button>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

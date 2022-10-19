@extends('template.profile')
@section('title','My Perfil')
@section('content')
  <div class="container-fliud">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">        
        @forelse($notas as $nota)
        <div class="row">
          <div class="container-fluid my-5">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 offset-2 offset-sm-2 offset-md-2 offset-lg-2 border shadow rounded border-secondary bg-dark">
              <div class="row">
                <div class="container-fluid mt-5 text-light">
                  <div class="row">
                    <h2 class="text-center">{{ $nota ->title }}</h2>
                      <p class="p-3">{{ $nota ->descripcion }}</p>
                    <div class="col">
                      <button class="btn btn-danger px-3 py-2 mx-3 my-3">Eliminar</button>
                      <button class="btn btn-primary px-3 py-2 mx-3 my-3">Actualizar</button>
                      <!--<button class="btn btn-success px-3 py-2 mx-3 my-3"><a class="text-light" href="{{ route('perfil.show', $nota) }}">Mostar Nota</a></button>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>              
        @empty
        <div class="row">
          <div class="container-fluid my-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded border-secondary bg-secondary">
              <div class="row">
                <div class="container-fluid mt-5 text-light">
                  <div class="row">
                    <p class="text-center">No hay proyectos mostrados</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        @endforelse
      </div>
    </div>
  </div>
  @endsection

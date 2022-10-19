@extends('template.index')
@section('title','Registro')
@section('contenido')
<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h1 class="col align-self-center">Register</h1>
                </div>
            </div>
        </div>
        <form action="{{route('registro.store')}}" method="POST" class="bordered border-radius p-5">
            <div class="row">
                @csrf
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group mt-4">
                        <label for="username">Username : </label>
                        <input type="text" name="username" class="form-control mt-2 py-2" value="{{ old('username') }}" placeholder="Username" id="username">
                        {!! $errors->first('username', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="form-group mt-4">
                        <label for="username">Email : </label>
                        <input type="text" name="email" class="form-control mt-2 py-2" value="{{ old('Email') }}" placeholder="Email" id="Email">
                        {!! $errors->first('Email', '<p class="text-danger">:message</p>') !!}
                    </div>
                
                    <div class="form-group mt-4">
                        <label for="password">Password : </label>
                        <input type="password" name="password" class="form-control mt-2 py-2" value="{{ old('password') }}" placeholder="Password" id="password">
                        {!! $errors->first('password', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="form-group mt-4">
                    <p class="text-center fs-5"><a href="/">inicia sesión has click aqui</a></p>
                </div>
                    <div class="form-group mt-4 ">
                        <button type="submit" class="btn btn-primary px-5 py-2 my-2">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
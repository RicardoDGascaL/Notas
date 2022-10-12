@extends('template.index')
@section('title','Registro')
@section('contenido')
<div class="row">
    <div class="col-4 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4">
        <form action="{{route('loggearme')}}" method="POST" class="bordered shadow border-radius p-5">
            <div class="container-fluid">
                <h1 class="navbar-brand">@yield('title')</h1>
            </div>
            <div class="row">
                @csrf
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group mt-4">
                        <label for="username">Username : </label>
                        <input type="text" name="username" class="form-control mt-2" placeholder="Username" id="username">
                    </div>
                    <div class="form-group mt-4">
                        <label for="username">Email : </label>
                        <input type="text" name="Email" class="form-control mt-2" placeholder="Email" id="Email">
                    </div>
                
                    <div class="form-group mt-4">
                        <label for="password">Password : </label>
                        <input type="password" name="passwd" class="form-control mt-2" placeholder="Password" id="password">
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-primary mt-2">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
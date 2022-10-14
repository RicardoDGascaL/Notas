@extends('template.index')
@section('title','Login')
@section('contenido')

<div class="row">
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 offset-md-4 offset-lg-4 border shadow rounded bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h1 class="col align-self-center">Login</h1>
                </div>
            </div>
        </div>
        <form action="{{route('loggearme')}}" method="POST" class="bordered shadow border-radius p-5">
            <div class="row">
                @csrf
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-2">
                    <div class="form-group mt-4">
                        <label for="username">Username : </label>
                        <input type="text" name="username" class="form-control mt-2" placeholder="Username" id="username">
                    </div>
                </div>
                
                <div class="form-group mt-4">
                    <label for="password">Password : </label>
                    <input type="password" name="passwd" class="form-control mt-2" placeholder="Password" id="password">
                </div>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-success px-5 py-2 my-2">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
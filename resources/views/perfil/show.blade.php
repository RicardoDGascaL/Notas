@extends('template.profile')
@section('title', 'Nota |' . $nota->title)

@section('content')
<div class="mt-5 col-12 col-sm-12 col-md-12 col-lg-12">
    <h1 class="text-center">{{ $nota->title }}</h1>
    <p class="text-center">{{ $nota->descripcion }}</p>
</div>
@endsection
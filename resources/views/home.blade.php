@extends('layout')

@section('content')

<div class="">
<div class="card text-center">
    <div class="card-header">
        <h1 class="text-center">Contenido de home</h1>
    </div>
    <div class="card-body pt-5 mt-4 pb-5 mb-4">
        <h5 class="card-title">Bienvenido a este blog hecho con laravel</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('blog.index') }}" class="btn btn-primary">Ir al Blog</a>
    </div>
</div>
</div>
@endsection

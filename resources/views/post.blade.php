@extends('layout')

@section('content')
<div class="bg-black bg-gradient pb-4">
    <div class="container text-center pt-4 pb-4">
    <img src="https://picsum.photos/id/1{{ $post->id }}/536/354" class="" alt="...">
    </div>
<h1 class="text-primary">{{$post->title}}</h1>

<p class="text-secondary">{{$post->body}}</p>
</div>
@endsection

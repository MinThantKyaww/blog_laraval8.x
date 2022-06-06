@extends('layout')

@section('content')
<div class="container">
    <h1>Laraval framework</h1>
    <div class="card">
        <div class="card-header">
            Post
        </div>
        <div class="card-body">
            @foreach($data as $post)
                <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div><hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
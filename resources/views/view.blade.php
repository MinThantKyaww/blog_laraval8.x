@extends('layout')

@section('content')
<div class="container">
    <h1 style="text-align: center;padding: 20px 0px;">Laraval Framework</h1>
    <div class="card">
        <div class="card-header">
            <h2>Content</h2>
        </div>
        <div class="card-body">
                <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <p class="card-text">{{ 'Category :'.' '.$post->categories->name }}</p>
                <a href="/posts" class="btn btn-warning">Back</a>
        </div>
    </div>
</div>
@endsection
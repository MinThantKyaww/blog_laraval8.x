@extends('layout')

@section('content')
<div class="container">
    <h1 style="text-align: center;padding: 20px 0px;">Laraval Framework</h1>
    <div class="card">
        <div class="card-header">
            <h2>Post</h2>
            <a href="posts/create" class="btn btn-success">Create new</a>
            <a href="logout" class="btn btn-danger">Log out</a>
        </div>
        <div class="card-body">
            @foreach($data as $post)
                <div>
                <h5 class="card-title">{{ $post->name }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="/posts/{{ $post->id }}" class="btn btn-primary">View</a>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
                <form style="display: inline;" action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </div><hr>
            @endforeach
        </div>
    </div>
</div>
@endsection
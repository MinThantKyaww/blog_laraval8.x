@extends('layout')

@section('content')
<div class="container">
    <h1 style="text-align: center;padding: 20px 0px;">Laraval Framework</h1>
    <div class="card">
        <div class="card-header">
            <h2>Create</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="card-body">
            <form action="/posts" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Description</label>
                  <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description ') }}</textarea>
                </div>
                <div class="mb-3">
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select category</option> 
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>       
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-warning">Back</a>
              </form>
        </div>
    </div>
</div>
@endsection
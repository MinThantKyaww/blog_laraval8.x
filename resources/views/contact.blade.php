@extends('layout')

@section('content')
    <h3>Contact page</h3>
    @foreach($data as $key => $value)
        {{ $key.' = '.$value}}
    @endforeach
@endsection
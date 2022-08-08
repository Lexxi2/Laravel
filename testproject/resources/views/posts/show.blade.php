@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title }}</h1>
    <div>
        <!-- like this it will parse the html -->
        {!!$post->body!!}
    </div>
    <hr>
    <small>Writton on {{$post->created_at}} </small>
@endsection
@extends('master')

@section('title', 'Homepage')


@section('content')

    <h2>Post a Message</h2>

    <form action="/create" method="POST">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>

    <br>

    <h2>Recent Messages:</h2>

    <ul>
        @foreach ($messages as $message)
            <li> 
                <strong>{{ $message->title }}</strong> <br>
                {{ $message->content }}
                <br>
                {{ $message->created_at->diffForhumans() }} 
                <br>
                <a href="/message/{{ $message->id }}">View</a>
            </li>
            
        @endforeach

@endsection
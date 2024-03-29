@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{ Form::lable('title', 'Title' )}}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'] )}}
        </div>
        <div class="form-group">
            {{ Form::lable('body', 'Body' )}}
            {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'] )}}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

@endsection
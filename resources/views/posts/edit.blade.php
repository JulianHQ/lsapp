@extends('layouts.mylayout')

@section('content')
  <h1>Edit Post</h1>

  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    {{-- Spoot the method PUT using Laravel --}}
    {{ Form::hidden('_method', 'PUT') }}

    <div class="form-group">
      {{ Form::label('title', 'Title') }}

      {{ Form::text('title', $post->title, [
        'class'       => 'form-control',
        'placeholder' => 'Title of the post'
      ]) }}
    </div>

    <div class="form-group">
      {{ Form::label('body', 'Body') }}

      {{ Form::textarea('body', $post->body, [
        'id'          => 'article-ckeditor',
        'class'       => 'form-control',
        'placeholder' => 'Body of the post'
      ]) }}
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection

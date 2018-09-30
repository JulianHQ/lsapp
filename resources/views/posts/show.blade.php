@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-secondary">Go back</a>

  <br />
  <br />

  <h1>{{ $post->title }}</h1>

  <div class="">
    {{ $post->body }}
  </div>

  <hr />

  <small>Written on {{ $post->created_at }}</small>
@endsection

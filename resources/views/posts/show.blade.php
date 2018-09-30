@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-secondary">Go back</a>

  <br />
  <br />

  <h1>{{ $post->title }}</h1>

  <div class="">
    {{-- This wouldn't parse the HTML --}}
    {{-- {{ $post->body }} --}}

    {{-- So that it actually parse the HTML --}}
    {!! $post->body !!}
  </div>

  <hr />

  <small>Written on {{ $post->created_at }}</small>
@endsection

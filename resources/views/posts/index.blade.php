@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

  @forelse ($posts as $post)
    <div class="alert alert-secondary">
      <h3>
        <a href="/posts/{{ $post->id }}">
          {{ $post->title }}
        </a>
      </h3>

      <small>
        Written on {{ $post->created_at }}
        by {{ $post->user->name }}
      </small>
    </div>
  @empty
    <p>No posts found!</p>
  @endforelse

  {{ $posts->links() }}
@endsection

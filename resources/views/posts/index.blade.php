@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

  @forelse ($posts as $post)
    <div class="alert alert-secondary">
      <div class="row">
        <div class="col-4">
          <img src="/storage/cover_images/{{ $post->cover_image }}" alt="Cover Image" style="width: 100;">
        </div>
        <div class="col-8">
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
      </div>
    </div>
  @empty
    <p>No posts found!</p>
  @endforelse

  {{ $posts->links() }}
@endsection

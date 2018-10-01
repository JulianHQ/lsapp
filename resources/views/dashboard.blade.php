@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

          <a href="/posts/create" class="btn btn-primary">Create Post</a>

          <p>You are logged in!</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($posts as $post)
                <tr>
                  <td>{{ $post->title }}</td>
                  <td>
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                      {{ Form::hidden('_method', 'DELETE') }}
                      {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="3">User has no posts!</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

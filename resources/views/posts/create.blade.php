@extends('layouts.app')

@section('title', 'Create post')
@section('main-content')

    <!-- Create Post Content -->
    <h2 class="text-center mt-5 text-primary">Create New Post</h2>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="title" placeholder="" value="">
      </div>
      <div class="mb-3">
        <label for="posted_by" class="form-label">Posted By:</label>
        <input type="text" class="form-control" id="posted_by" placeholder="" value="">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date of post</label>
        <input type="text" class="form-control" id="date" placeholder="" value="">
      </div>

      <button type="submit" class="mt-3 btn btn-outline-primary">
            Create Post
      </button>
    </form>

    <!-- Create Post Content -->


@endsection
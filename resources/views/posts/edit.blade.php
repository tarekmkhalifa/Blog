@extends('layouts.app')

@section('title', 'Edit post')
@section('main-content')

    <!-- Edit Post Content -->
    <h2 class="text-center mt-5 text-warning">Edit post</h2>
    <form method="POST" action="{{route('posts.update',$post['id'])}}">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" class="form-control" id="title" placeholder="Post Title" value="{{$post['title']}}">
      </div>
      <div class="mb-3">
        <label for="posted_by" class="form-label">Posted By:</label>
        <input type="text" class="form-control" id="posted_by" placeholder="Posted By" value="{{$post['posted_by']}}">
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date of post</label>
        <input type="text" class="form-control" id="date" placeholder="Date of post" value="{{$post['creation_date']}}">
      </div>

      <button type="submit" class="mt-3 btn btn-outline-warning">
            Update Post
      </button>
    </form>

    <!-- Edit Post Content -->


@endsection
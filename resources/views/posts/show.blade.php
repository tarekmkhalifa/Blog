@extends('layouts.app')

@section('title', 'Post')

@section('main-content')

    <div class="post mt-5">
        <h4 class="alert alert-secondary">Post Title: <span class="text-primary">{{$post['title']}}</span></h4>
        <h4 class="alert alert-secondary">Posted By: <span class="text-primary">{{$post['posted_by']}}</span></h4>
        <h4 class="alert alert-secondary">Date of post: <span class="text-primary">{{$post['creation_date']}}</span></h4>
        <a class="btn btn-warning" href="{{route('posts.edit',$post['id'])}}">Edit Post</a>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Add user')
@section('main-content')

    <!-- Add new user Content -->
    <h2 class="text-center mt-5 text-primary">Create New User</h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">User Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="enter your name"
                value="">
        </div>
        <button type="submit" class="mt-3 btn btn-outline-primary">
            Add user
        </button>
    </form>
    <!-- Add new user Content -->

@endsection

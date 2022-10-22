@extends('layouts.app')

@section('title', 'Home')


@section('main-content')

    <h1 class="mt-5 text-center text-secondary">All Posts</h1>
    <a class="btn btn-primary" href="{{route('posts.create')}}">Create Post</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['posted_by']}}</td>
                <td>{{$post['creation_date']}}</td>
                <td class="d-flex gap-3">
                    {{-- <x-button type="primary" name="Show">an</x-button>
                    <x-button type="secondary" name="Edit"></x-button>
                    <x-button type="danger" name="Delete"></x-button> --}}
                    
                    <a class="btn btn-sm btn-secondary" title="show" href="{{route('posts.show',$post['id'])}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-sm btn-warning" title="edit" href="{{route('posts.edit',$post['id'])}}"><i class="fa-regular fa-pen-to-square"></i></a>
                    <form method="POST" action="{{route('posts.destroy',$post['id'])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('are you sure?')" title="delete" ><i
                            class="fa-regular fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection

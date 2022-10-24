<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(10);
        return view('posts.index', compact('posts'));
    } // end of index


    public function create()
    {
        $users = User::all('id', 'name');
        // dd($users);
        return view('posts.create', compact('users'));
    } // end of create


    public function store(StorePostRequest $request)
    {
        $formData = request()->all();
        // dd($formData);
        Post::create($formData);
        //show success message
        return to_route('posts.create')->with('message', 'Post created successfully');
    } // end of store


    public function show($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->get()->first();
        return view('posts.show', compact('post'));
    } // end of show

    public function edit($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->get()->first();
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    } // end of edit

    public function update(UpdatePostRequest $request, $id)
    {
        // dd(request()->all());
        $post = Post::find($id);
        $post->title = request()->title;
        $post->details = request()->details;
        $post->user_id = request()->user_id;
        $post->save();
        //show success message
        return to_route('posts.edit', $id)->with('message', 'Post updated successfully');
    } // end of update

    public function deletedPosts()
    {
        $posts = Post::onlyTrashed()->orderBy('updated_at', 'DESC')->paginate(10);
        return view('posts.deleted', compact('posts')); //return delted posts page

    } // end of delted posts

    public function destroy($id)
    {
        Post::find($id)->delete(); //soft delete
        // show success message
        return to_route('posts.index')->with('message', 'Post deleted successfully');

    } // end of destroy

    public function deleteForEver($id)
    {
        Post::where('id', $id)->forceDelete();
        // show success message
        return to_route('posts.deleted')->with('message', 'Post deleted successfully');
        
    } // end of delte forever

    public function restorePost($id)
    {
        Post::where('slug', $id)->restore();
        // show success message
        return to_route('posts.deleted')->with('message', 'Post restored successfully');

    } // end of restore post
}// end of class

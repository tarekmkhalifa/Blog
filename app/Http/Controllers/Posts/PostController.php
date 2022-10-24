<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


    public function store()
    {
        $formData = request()->all();
        // dd($formData);
        Post::create($formData);
        //show success message
        return to_route('posts.create')->with('message', 'Post created successfully');
    } // end of store


    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    } // end of show

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    } // end of edit

    public function update($id)
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
        $post = new Post();
        $post = $post->find($id);
        dd($post);
        if ($post->trashed()) {
            $post->delete();
            // show success message
            return to_route('posts.deleted')->with('message', 'Post deleted successfully');

        } else {
            $post->delete();
            // show success message
            return to_route('posts.index')->with('message', 'Post deleted successfully');
        }

    } // end of destroy

    public function deleteForEver($id)
    {
        $post = Post::find($id);
        dd($post); //null ?????

        $post->forceDelete();
        // show success message
        return to_route('posts.deleted')->with('message', 'Post deleted successfully');
    }

    public function restorePost($id)
    {
        $post = Post::find($id);
        dd($post); //null ?????

    }
}// end of class

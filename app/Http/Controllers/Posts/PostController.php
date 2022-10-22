<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $posts = [
        ['id' => 1 , 'title' => 'laravel is cool', 'posted_by' => 'Ahmed', 'creation_date' => '2022-10-22'],
        ['id' => 2 , 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
        ['id' => 3 , 'title' => 'JavaScript deep dive', 'posted_by' => 'Tarek', 'creation_date' => '2022-10-22'],
        ['id' => 4 , 'title' => 'PHP is lovely language', 'posted_by' => 'Osama', 'creation_date' => '2022-10-21'],
        ['id' => 5 , 'title' => 'PHP deep dive', 'posted_by' => 'Mohamed', 'creation_date' => '2022-10-15'],
    ];

    public function index()
    {
        return view('posts.index', ['posts'=>$this->posts]);

    }// end of index


    public function create()
    {
        return view('posts.create');

    }// end of create


    public function store()
    {
        return redirect(route('posts.index')); //redirect to index page

    }// end of store


    public function show($id)
    {
        foreach($this->posts as $post){
            if($post['id'] == $id){
                return view('posts.show', ['post'=>$post]);
            }
        }

    }// end of show

    public function edit($id)
    {
        foreach($this->posts as $post){
            if($post['id'] == $id){
                return view('posts.edit', ['post'=>$post]);
            }
        }
        
    }// end of edit

    public function update($id)
    {
        return redirect(route('posts.index')); //redirect to index page

    }// end of update

    public function destroy($id)
    {
        return redirect(route('posts.index')); //redirect to index page
        
    }// end of destroy

}// end of class

<?php

use App\Http\Controllers\Posts\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index'); //home page
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //home page
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); //create page
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); //show page
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); //edit page to update post
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); //to add new post
// Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); //to update post
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); //to delete post


Route::resource('posts', PostController::class); //resource route for post controller
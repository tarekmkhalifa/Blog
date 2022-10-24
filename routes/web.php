<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\PostController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PostController::class, 'index'])->name('posts.index')->middleware(['auth']); //home page
Route::resource('posts', PostController::class)->middleware(['auth']); //resource route for post controller
Route::get('deleted/posts', [PostController::class,'deletedPosts'])->name('posts.deleted'); // deleted posts page
Route::delete('deleted/posts/{id}', [PostController::class,'deleteForEver'])->name('posts.deletePermently'); // delete post forever
Route::post('restore/posts/{id}', [PostController::class,'restorePost'])->name('posts.restore'); // restore post
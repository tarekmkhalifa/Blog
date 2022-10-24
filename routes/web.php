<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\PostController;
use App\Http\Controllers\Users\UserController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PostController::class, 'index'])->name('posts.index')->middleware(['auth']); //home page
 //resource route for post controller
Route::resource('posts', PostController::class)->middleware(['auth']);
Route::get('deleted/posts', [PostController::class,'deletedPosts'])->name('posts.deleted'); // deleted posts page
Route::delete('deleted/posts/{id}', [PostController::class,'deleteForEver'])->name('posts.deletePermently'); // delete post forever
Route::post('restore/posts/{id}', [PostController::class,'restorePost'])->name('posts.restore'); // restore post






// Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); //home page
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); //create page
// Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show'); //show page
// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); //edit page to update post
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); //to add new post
// Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); //to update post
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); //to delete post

// Route::get("users/create", [UserController::class,'create'])->name('users.create'); //create new user page
// Route::post("users/store", [UserController::class,'store'])->name('users.store'); //stpre new user

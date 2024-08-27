<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/show/{slug}', [PostController::class, 'show']);

Route::get('/posts/new', function(){
    return view('posts.new');
})->name('posts.new');
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/destroy/{postId}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/edit/{postId}', function($postId) {
    $post = Post::find($postId);
    return view('posts.edit', compact('post'));
})->name('posts.edit');
Route::post('/posts/update/{postId}', [PostController::class, 'update'])->name('posts.update');

// Route::resource('posts', PostController::class)->only([
//     'destroy', 'show', 'store', 'update'
// ]);

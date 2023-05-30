<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ PostController::class, 'index' ], function() { 
})->name('home');


Route::get('posts/{post:slug}', [PostController::class, 'show' ]);



Route::get('authors/{author:username}', function(User $author) {
  return view('posts', [
    'posts' => $author->posts,     //->load(['category', 'author']) //Stop n+ 1.
    'categories' => Category::all()
  ]);
});

/*Route::get('posts/{post}', function($slug) // (id) {
  return view('post', [
      'post' => Post::findOrFail($slug) //(id)
  ]);
});*/
//->where('post', '[A-z_\-]+');  
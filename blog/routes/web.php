<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', function() { 
  $posts = Post::latest();
  if (request('search')) {
    $posts
      ->where('title', 'like', '%' . request('search') . '%')
      ->orWhere('body', 'like', '%' . request('search') . '%');
  }
 
  return view('posts', [

    'posts' => $posts->get(),
    //'posts' => Post::latest()->get()
    //'posts' => Post::latest()->with(['category', 'author'])->get(),
    'categories' => Category::all()
  ]);
})->name('home');


Route::get('posts/{post:slug}', function(Post $post) {
  return view('post', [
      'post' => $post
  ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
  return view('posts', [
    'posts' => $category->posts, //->load(['category', 'author']) Move to Post.php(protected)
    'currentCategory' => $category,
    'categories' => Category::all()
  ]);
})->name('category');

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
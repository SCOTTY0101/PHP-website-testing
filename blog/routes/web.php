<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
   // return Post::find('my-first-post');
    return view('posts');
    
});

// /{post} Wildcard passed to function($slug) value for .html page. 
Route::get('post/{post}', function($slug) {
     // Find a post by its slug  and pass it to a view called 'post'
   //  $post = Post::find($slug);

     return view('post', [
         'post' => Post::find($slug)
     ]);
})->where('post', '[A-z_\-]+');  
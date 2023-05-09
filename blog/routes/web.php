<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts');
    
});

Route::get('post/{post}', function($slug) {
    //return  $slug;
    //$path = (__DIR__ . "/../resources/posts/{$slug}.html");

    //ddd($path);
    
    if (! file_exists($path = (__DIR__ . "/../resources/posts/{$slug}.html"))) {
        return redirect('/');
        //return ddd('file does not exist.');
        //abort(404);
    };

    $post = cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));
       // var_dump('file_get_contents');

    
   # $post = file_get_contents($path);
    
    return view('post', [ 'post' => $post ]); 
})->where('post', '[A-z_\-]+');     //->whereAlpha('post');  Method, command +click            //->where('post', '[A-z_-\]+');
//Route::get('register', [RegisterController::class, 'create']);
<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
//use App\Models\Category;
//use App\Models\Post;
//use App\Models\User;
use Illuminate\Support\Facades\Route;
//use Spatie\YamlFrontMatter\YamlFrontMatter;
//use Illuminate\Support\Facades\File;
//use Symfony\Component\Yaml\Yaml;

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

Route::get('/', [ PostController::class, 'index' ])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show' ]);

Route::get('register', [RegisterController::class, 'create']);
Route::POST('register', [RegisterController::class, 'store']);



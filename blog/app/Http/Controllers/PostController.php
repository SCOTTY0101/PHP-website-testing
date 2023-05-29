<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       
        return view('posts', [

            'posts' => $this->getPosts(),
            //'posts' => Post::latest()->get()
            //'posts' => Post::latest()->with(['category', 'author'])->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }

    protected function getPosts() {
        $posts = Post::latest();
            if (request('search')) {
                $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
            }
            return $posts->get();
    }
}

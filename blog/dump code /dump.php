<?php

                             //return  $slug;
                                //$path = (__DIR__ . "/../resources/posts/{$slug}.html");

                                //ddd($path);
    // Find a post by its slug  and pass it to a view called 'post'


    // if (! file_exists($path = (__DIR__ . "/../resources/posts/{$slug}.html"))) {
    //     return redirect('/');
    //     //return ddd('file does not exist.');
    //     //abort(404);
    // };

    //         //$post = cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path)); Use fast cache memory
    //         // var_dump('file_get_contents')    
    // $post = file_get_contents($path);

    // return view('post', [ 'post' => $post ]); 

    #})->where('post', '[A-z_\-]+');     
//->whereAlpha('post');  Method, command +click            
//->where('post', '[A-z_-\]+');
//Route::get('register', [RegisterController::class, 'create']);


 /*$document = YamlFrontMatter::parseFile(
    resource_path("posts/my-forth-post.html")
  );*/
  
  /*  return view('posts', [
        'posts' => Post::all()
    ]);*/
   // ddd($document->title);


/*
   public $title;
   public $excerpt;
   public $date;
   public $body;

   public function __construct($title, $excerpt, $date, $body) 
   {
       $this->title = $title;
       $this->$excerpt = $excerpt;
       $this->$date = $date;
       $this->$body = $body;
   }
       
   */
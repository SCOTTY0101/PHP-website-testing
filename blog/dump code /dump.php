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

/*$document = YamlFrontMatter::parseFile(
   resource_path('posts/my-fourth-post.html')
  );
  
 //ddd(); */


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

/* //Google bard AI
class User {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        // Check if the username and password are valid.
        $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$this->username, $this->password]);

        if ($stmt->rowCount() > 0) {
            // Login successful.
            $_SESSION['user'] = $this->username;
            return true;
        } else {
            // Login failed.
            return false;
        }
    }

    public function logout() {
        // Destroy the session.
        session_destroy();
    }

} */

/**$posts = array_map(function($file) {
    $documents = YamlFrontMatter::parseFile($file);
      return new Post(
        $documents->title,
        $documents->excerpt,
        $documents->date,
        $documents->body(),
        $documents->slug
      );
    }, $files); */

    /* $files = File::files(resource_path("posts/"));

        //return array_map(fn($file) => $file->getContents(), $files); */
        
    /**public static function find($slug) 
    {
       // base_path();
        if (! file_exists($path = resource_path("/posts/{$slug}.html"))) {
                throw new ModelNotFoundException();
                 //return redirect('/'); //Move to routes dir.
             };
        
            return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path)); //Use fast cache memory
    } */

/*@extends('/components/layout')

@section('banner')
    <h1>Blog Banner Insert</h1>
@endsection

@section('content')
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'foo' : ''}}">
            <h1>
                <!-- Change /posts/ to /post/. Bage home page now works????-->
                <a href="/posts/{{ $post->slug; }}">
                    {{ $post->title; }}
                </a>    
            </h1>

            <div>
                {{ $post->excerpt; }}
            </div>
        </article>
    @endforeach
@endsection
*/

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

/**\Illuminate\Support\Facades\DB::listen(function($query) {
    logger($query->sql, $query->bindings);
  }); */ //Log debugger. Very heavy. empty.


  /* //Form select from header page.
  
  <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
  <option value="category" disabled selected>Category
  </option>
 
  @foreach ($categories as $category)
  <option value="{{ $category->slug }}">{{ $category->name }}</option>
 {{-- <option value="business">Business</option> --}}
  @endforeach
 
</select>

<svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
   height="22" viewBox="0 0 22 22">
  <g fill="none" fill-rule="evenodd">
      <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
      </path>
      <path fill="#222"
            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
  </g>
</svg>
*/

/*
 <div x-data="{ show : false }" @click.away="show = false">
                    <botton @click="show = !show" class="flex-inline p-2 pl-3 pr-9 text-sm font-semibold">
                        Categories
                    </botton>
                    <div x-show="show" class="grid absolute w-full mt-4 bg-gray-100" style="display: none">
                        <a href="#" class="text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l">One</a>
                        <a href="#" class="text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l">Two</a>
                        <a href="#" class="text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l">Three</a>
                    </div>
                </div> 
*/

/*
-post header drop down box
<div x-show="show" class="grid absolute w-full mt-4 bg-gray-100" style="display: none">
        <a href="/"
        class="text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l"
    >All</a>

        @foreach ( $categories as $category )
            <a href="/categories/{{ $category->slug }}"
            class="grid text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l
            {{ isset($currentCategory) && $currentCategory-> id === $category->id ? 'bg-blue-500' : ''}}
            {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500' : ''}}
            
            "
            >{{ ucwords($category->name) }}
            </a>
        @endforeach
    </div>
*/

/*
<botton @click="show = !show" class="flex-inline p-2 pl-3 pr-9 text-sm font-semibold">
{{-- isset( $currentCategory ) ? ucwords($currentCategory->name) : 'Drop Down Category' --}}
</botton>
   {{-- {{ isset($currentCategory) && $currentCategory-> id === $category->id ? 'bg-blue-500' : ''}} --}}

    <x-dropdown-item href="/">All</x-dropdown-item>

                @foreach ( $categories as $category )
                    <x-dropdown-item 
                        href="/categories/{{ $category->slug }}"
                        :active="isset($currentCategory) && $currentCategory->is($category)"
                       //  :active="request()->is('categories/' . $category->slug)"
                       //:active="request()->is('*' . $category->slug)" // Wildcard. Not as targeted.
                       // :active='request()->is("categories/.{$category->slug}")'
                        >{{ ucwords($category->name) }}
                    </x-dropdown-item>            
                @endforeach
            </x-dropdown>

//<x-down-arrow class="absolute pointer-events-none" style="right: 12px;"></x-down-arrow>
*/

/*
<svg {{ $attributes(['class' => 'transform -rotate-90']) }} width="22" height="22" viewBox="0 0 22 22">
    <g fill="none" fill-rule="evenodd">
        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
            </path>
        <path fill="#222"
        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
    </g>
</svg> * */

/*
 * <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <botton class="flex-inline p-2 pl-3 pr-9 text-sm font-semibold">   
 */

 /*
 <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>
  */
  //'body' => $this->faker->paragraph
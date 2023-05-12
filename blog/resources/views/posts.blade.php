<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>

    <link rel="stylesheet" href="/app.css">
   <!-- <script src="/app.js"></script> -->
</head>
<body>
    @foreach($posts as $post)
    @dd($loop);
        <article>
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
    
</body>
</html>

<!--  <article>
        <h1><a href="/post/my-first-post">My First Blog</a></h1>
        <p>
            Lorem  POSTS PHP ipsum dolor sit amet consectetur adipisicing elit. 
            Provident magni rem commodi molestiae nobis hic minus! 
            Vel odio tempore labore? Ipsam, laborum! Dolores atque odio, 
            perspiciatis praesentium dolorum quam magnam.
        </p>
    </article>

    <article>
        <h1><a href="/post/my-second-post">My Second Blog</a></h1>
        <p>
            Lorem POSTS PHP ipsum dolor sit amet consectetur adipisicing elit. 
            Provident magni rem commodi molestiae nobis hic minus! 
            Vel odio tempore labore? Ipsam, laborum! Dolores atque odio, 
            perspiciatis praesentium dolorum quam magnam.
        </p>
    </article>

    <article>
        <h1><a href="/post/my-third-post">My Third Blog</a></h1>
        <p>
            Lorem POSTS PHP ipsum dolor sit amet consectetur adipisicing elit. 
            Provident magni rem commodi molestiae nobis hic minus! 
            Vel odio tempore labore? Ipsam, laborum! Dolores atque odio, 
            perspiciatis praesentium dolorum quam magnam.
        </p>
    </article>
    
    -->
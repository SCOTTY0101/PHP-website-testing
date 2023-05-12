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

    <article>
        <h1>
            <?= $post->title; ?>
        </h1>
        <div>
            <?= $post->body; ?>
        </div>
    </article>
    <p><a href="/">home page</a></p>
    
</body>
</html>
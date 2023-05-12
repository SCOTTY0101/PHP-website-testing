@extends ('layout')

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
@endsecion


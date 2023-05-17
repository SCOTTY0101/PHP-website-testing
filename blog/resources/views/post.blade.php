<x-layout>
    <x-slot name="content">
            <article>
                <h1>
                    {!! $post->title; !!}
                </h1>

                <p>
                By <a href="#">John Wick</a> in </a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>      
                </p>

                <div>
                    {!! $post->body; !!}
                </div>
            </article>
        <p><a href="/">home page</a></p>
    </x-slot>
</x-layout>
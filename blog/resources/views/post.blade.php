<x-layout>
    <x-slot name="content">
            <article>
                <h1>
                    {{ $post->title; }}
                </h1>
                <div>
                    {!! $post->body; !!}
                </div>
            </article>
        <p><a href="/">home page</a></p>
    </x-slot>
</x-layout>


<x-layout> 
    <x-slot name="content">
      <div> 
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'foo' : ''}}">
            <h1>
                <a href="/posts/{{ $post->id; }}">
                    {{ $post->title; }}
                </a>    
            </h1>
    
            <div>
                {{ $post->excerpt; }}
            </div>
        </article>
    @endforeach
      </div>
    </x-slot>
</x-layout>

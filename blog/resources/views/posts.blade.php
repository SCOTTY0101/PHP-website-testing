

<x-layout> 
    <x-slot name="content">
        
      <div> 
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'foo' : ''}}">
            <h1>
                <a href="/posts/{{ $post->slug; }}">
                    {{ $post->title }}
                </a>    
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
      </div>
    </x-slot>
</x-layout>

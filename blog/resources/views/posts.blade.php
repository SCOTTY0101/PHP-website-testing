
<x-layout> 
@include ('_post-header');

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
    <x-post-featured-card :post="$posts[1]"/>
        @if ($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($posts->skip(1) as $post)
            <x-card-post :post="$post" />
            @endforeach
        @endif
        </div>
    @else
    <p class="text-center">No posts yet. Please check later.</p>
    @endif
</main>
</x-layout>



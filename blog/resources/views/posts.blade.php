
<x-layout> 
@include ('_post-header');

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <x-post-featured-card :post="$posts[0]"/>

    <div class="lg:grid lg:grid-cols-2">
        <x-card-post />
        <x-card-post />
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-card-post />
        <x-card-post />
        <x-card-post />
    </div>
</main>
</x-layout>


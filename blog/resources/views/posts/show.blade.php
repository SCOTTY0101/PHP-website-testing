@props(['posts'])

<x-layout>
    <article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5 lg:flex">
            <div class="flex-1 lg:mr-8">
                <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="flex-1 flex flex-col justify-between">
                <header class="mt-8 lg:mt-0">
                    
                    <div>
                        <a href="/"
                           class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">Back to Home</a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-3xl">
                            <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                            </a>
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                                Published <time>{{ $post->created_at->diffForHumans() }}</time>
                            </span>
                    </div>
                </header>

                <div class="text-sm mt-2">
                    <p>
                        {!! $post->excerpt !!}
                    </p>

                    
                </div>

                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3">
                            <h5 class="font-bold">
                                <a href="/?author={{ $post->author->username }}">{{ $post->author->name }} </a>
                            </h5>
                        </div>
                    </div>

                </footer>
            </div>
        </div>
    </article>
</x-layout>
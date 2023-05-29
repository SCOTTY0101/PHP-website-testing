<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-0 lg:space-y-0 lg:space-x-4 mt-4"> 

        <!--  Category -->
       <div class="relative flex lg:inline-flex items-center bg-gray-200 rounded-xl">
        <!-- js in here. not  to server. page link. -->
        <!-- Dropdown page links below -->

            <x-dropdown>
                <x-slot name="trigger" >
                    <botton class="relative flex lg:inline-flex  p-2 pl-3 pr-9 text-sm font-semibold items-center bg-gray-100 rounded-xl">   
                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
                        {{ isset( $currentCategory ) ? ucwords($currentCategory->name) : 'Drop Down Category' }}     
                    </botton>
                </x-slot>
            
                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                @foreach ( $categories as $category )
                    <x-dropdown-item 
                        href="/categories/{{ $category->slug }}"
                        :active='request()->is("categories/.{$category->slug}")'
                        >{{ ucwords($category->name) }}
                    </x-dropdown-item>            
                @endforeach
            </x-dropdown>
        </div> 

        <!-- Other Filters -->

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" 
                        name="search" 
                        placeholder="Find something"
                        class="bg-transparent placeholder-black font-semibold text-sm"
                        value="{{ request('search')}}"
                        >
            </form>
        </div>
    </div>
</header>
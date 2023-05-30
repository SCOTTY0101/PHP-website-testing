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
            href="/?categories={{ $category->slug }}"
            :active='request()->is("categories/.{$category->slug}")'
            >{{ ucwords($category->name) }}
        </x-dropdown-item>            
    @endforeach
</x-dropdown>

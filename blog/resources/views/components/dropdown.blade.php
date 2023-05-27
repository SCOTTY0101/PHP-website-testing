<div x-data="{ show : false }" @click.away="show = false">
 {{-- Trigger button--}}
    <botton @click="show = !show" class="flex-inline p-2 pl-3 pr-9 text-sm font-semibold">
        {{ isset( $currentCategory ) ? ucwords($currentCategory->name) : 'Drop Down Category'}}
        
    </botton>

    {{-- Links--}}
    <div x-show="show" class="grid absolute w-full mt-4 bg-gray-100" style="display: none">
        {{ $slot }}
    </div>
</div> 

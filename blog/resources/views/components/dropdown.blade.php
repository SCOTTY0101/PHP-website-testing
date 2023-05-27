@props(['trigger'])

{{-- AlpineJS code here --}}
<div x-data="{ show : false }" @click.away="show = false">
 {{-- Trigger button--}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    {{-- Links on dropdown --}}
    <div x-show="show" class="grid absolute w-full mt-4 bg-gray-100" style="display: none">
        {{ $slot }}
    </div>
</div> 

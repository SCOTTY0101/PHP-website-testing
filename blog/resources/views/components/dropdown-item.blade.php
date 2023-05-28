@props(['active' => false])

@php
 $classes = 'grid text-left px-4 hover:bg-blue-400 focus:bg-400-400 rounded-l';

 if ($active) $classes = 'bg-blue-500';
@endphp

<a {{ $attributes(['class' => $classes]) }}
> {{ $slot }} 
</a>
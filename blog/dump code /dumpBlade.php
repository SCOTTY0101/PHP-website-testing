
<x-layout> 
   
    <x-slot name="str">
        <h1 class="text-red-700 text-center" >SLOT Hell world the return. SLOT</h1>
        <x-card />
    <x-card />


   

       
       @foreach ($posts as $post)
           <p> {{ $post->title }} </p>
        @endforeach
       <x-card-post />
       </x-slot>
        <x-slot name="content">
            <p>Empty string div</p>
        </x-slot>
   
</x-layout>
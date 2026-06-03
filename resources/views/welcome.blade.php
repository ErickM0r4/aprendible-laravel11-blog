{{-- Primera forma de usar componentes  --}}

{{-- Dentro de la directiva @component va el contenido que se muestra en el {{ $slot }} -------> components.layout   --}}
{{-- 
    @component('components.layout')
    <h1>INICIO</h1>
    @endcomponent
 --}}

 {{-- --------------------------------------------------------------------------------------------------------------- --}}

{{-- Segunda Forma - componentes blade --}}

<x-layout meta-title="Home Title" meta-description="Home description">
    <h1>INICIO</h1>

    {{-- 
    <x-slot name="sidebar">
        Home Sidebar
    </x-slot> 
    --}}

    {{-- Se inyecta en layout --}}
    <x-slot:sidebar>
       Contenido dinámico desde Home Sidebar
    </x-slot:sidebar> 
</x-layout>
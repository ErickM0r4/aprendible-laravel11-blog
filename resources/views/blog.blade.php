<x-layout meta-title="Blog Title" meta-description="Home description">
    <h1>BLOG</h1>

    {{-- Se inyecta en layout --}}
    <x-slot:sidebar>
       Contenido dinámico desde Blog
    </x-slot:sidebar> 

    {{-- @dump($posts) --}}

    {{-- Usamos la variable que se crea en el controlador /blog ---> 'posts' === $posts --}}
    @foreach ($posts as $post)
        <ul>
            <li>{{ $post->title }}</li>
        </ul>
    @endforeach

</x-layout>
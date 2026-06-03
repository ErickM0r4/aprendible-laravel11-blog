<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title'}}</title> {{-- equivale a ----> isset($metaTitle) ? $metaTitle : 'Default title' --}}
    <meta name="description" content="{{ $metaDescription ?? 'Default description '}}" />
</head>

<body>
    {{-- Incluimos el menú de navegación  --}}
    @include('partials.navigation')


    {{-- Pasar contenido --}}
    {{ $slot }} 


   {{-- @if (isset($sidebar))
        
    <div id="sidebar">
        <h3>Sidebar Layout</h3>

        <div> {{ $sidebar }} </div>
    </div>

   @endif --}}


   @isset($sidebar)
        {{-- Sidebar  --}}
    <div>
        <h3>Sidebar Layout</h3>

        <div> {{ $sidebar }} </div>
    </div>
   @endisset

</body>

</html>
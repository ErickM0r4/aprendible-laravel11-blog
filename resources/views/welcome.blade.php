<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>

<body>

    <ul>
        
        {{-- Accedemos por medio de la URI

        <li><a href="/">Home</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/nosotros">Nosotros</a></li>
        <li><a href="/contacto">Contacto</a></li> 

        --}}



        {{-- Accedemos por medio del NOMBRE de la RUTA --}}
        
        <li><a href="{{ route('nHome') }}">Home</a></li>
        <li><a href="{{ route('nBlog') }}">Blog</a></li>
        <li><a href="{{ route('nAbout') }}">Nosotros</a></li>
        <li><a href="{{ route('nContact') }}">Contacto</a></li>

    </ul>

    {{-- <p> <?= route('contact') ?></p> --}}

    <h1>INICIO</h1>
</body>

</html>

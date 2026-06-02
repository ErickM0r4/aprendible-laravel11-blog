   <nav>
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
   </nav>

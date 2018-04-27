<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title') </title>
        
</head>
<body>
    <nav class="navbar container navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">            
                <li class="nav-item dropdown {{ Request::is('notes') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/notes">Ver</a>
                        <a class="dropdown-item" href="/notes/create">Nueva Nota</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('contacto') ? 'active' : '' }} ">
                    <a class="nav-link" href="/contacto">Contacto</a>
                </li>            
            </ul>            
        </div>
    </nav>
    <div class="container">
        @yield('content')  
        
    </div>
    
    <div class="container text-center fixed-bottom text-white navbar-dark bg-dark">
        {{ config('app.name') }} @Todos los derechos reservados    
        <P>Desarrollado por Jose Hernandez</P>    
    </footer>
    <script src="/js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- css da aplicação --}}
        <link rel="stylesheet" href="/css/styles.css">
        {{-- js da aplicação --}}
        <script src="/javaScript/script.js"></script>

        {{-- fonte da google --}}
       
        <link href="https://fonts.googleapis.com/css2?family=Roboto:" rel="stylesheet">
        {{-- bootstrap --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <title>@yield('title')</title>

       
       
    </head>
    <body >
        <header>
            <nav class= "navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/logo.jpg" alt="logo" id="logo-img">
                    </a>
                    <lu class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">eventos</a>
                        </li>
                         <li class="nav-item">
                            <a href="/" class="nav-link">entra</a>
                        </li>
                         <li class="nav-item">
                            <a href="/" class="nav-link">cadrastar</a>
                        </li>
                         <li class="nav-item">
                            <a href="/" class="nav-link">ver eventos</a>
                        </li>
                    </lu>
                </div>
            </nav>
        </header>
        @yield('conteudo')
        <footer>
            <p> Arduino events &copy; 2024</p>
        </footer>
    </body>
</html>

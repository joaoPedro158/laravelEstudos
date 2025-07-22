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
        @yield('conteudo')
        <footer>
            <p> Arduino events &copy; 2024</p>
        </footer>
    </body>
</html>

<!-- Template Blade Php -->
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <!-- Css Blade Php -->
        @include('Site.layout.css')
        <!-- Css de la pagina -->
        @yield('css')
    </head>
    <body>
        <!-- Pagina -->
        @yield('body')
        <!-- Script Blade Php -->
        @include('Site.layout.scripts')
        <!-- Script de la pagina -->
        @yield('script')
    </body>
</html>
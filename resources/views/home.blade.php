<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coccapp</title>

        @vite('resources/css/app.css')
        @vite('resources/sass/app.scss')
        @vite('resources/js/app.js')

    </head>
    <body class="container">
    <div id="app"><main-component></main-component></div>
    </body>
</html>

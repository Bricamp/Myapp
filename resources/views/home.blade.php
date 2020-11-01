<!DOCTYPE html>
<html>


    <head>

        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        <div class="contenedor">
            @include('menu/menu-nav')
            <h1> Bienvenidos! </h1>

            <div id="app" class="content">
                <example-component></example-component>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
        </div>



    </body>

</html>


@extends('layout/layout')

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>


    <body>
        <div class="contenedor">
            @include('partial/menu-nav')

            <h1> {{ $post->title }}</h1>
            <div class="post-contenido">
                {!! $post->content !!}

            </div>
            <div class="row justify-content-center">
                <a href={{ route('viewposts') }} class="btn btn-primary" > Volver </a>
            </div>
        </div>
    </body>
</html>

@extends('layout')
 

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>

    <div class="contenedor-welcome">
        <div class="center">
            <h1>BIENVENIDOS A BLOG</h1>
                <div class="content-welcome">
                    <div class="row">
                        <div class="col-md-6">
                            <a href={{ route('createpost') }} class="btn btn-primary">Crear Post</a>
                        </div>
                        <div class="col-md-6">
                            <a href={{ route('viewposts') }} class="btn btn-primary">Ver Post</a>
                        </div>
                </div>
        </div>
    </div>
</html>

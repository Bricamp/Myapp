
<!DOCTYPE html>
<html lang="es">
    <head>
        @extends('layout/layout')
        <meta charset="utf-8">
    </head>

    <body>
        <div class="contenedor">
            @include('menu/menu-nav')

            <h1>Posts</h1>
            <div class="column">
                <div class="bloque-posts">
                    @foreach ($posts as $item)
                    <a href = {{ route('viewposts/id', ['id' => $item->id]) }} class="bloque-post-contenido">
                        <i></i>

                        <p class="bloque posts-author">
                            Autor: <b>{{ $item->author }}</b>
                        </p>

                        <h4>
                            {{ $item->title }}
                        </h4>

                        <p>
                            {{ $item->date }}
                        </p>

                        <p class="bloque post-subject">
                            @if (strlen($item->subject) < 15)
                                {{ $item->subject}}

                            @else
                                {{ substr($item->subject, 0 , 15) }}

                            @endif
                        </p>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="column">
                <a class="btn btn-primary" href={{ route('createpost') }}>Crear Post</a>
            </div>
            <div class= "bloque navegacion">
                <div class= "row justify-content-center">
                    {!! $posts->links() !!}
                </div>

            </div>
        </div>
    <body>
</html>

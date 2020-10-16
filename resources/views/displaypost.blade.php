@extends('layout/layout')

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <div class="container borde">
            @include('menu/menu-nav')

            <div class="row">
                <h1> {{ $post->title }}</h1>
            </div>

            <div class="row" style="margin-bottom:20px">
                {!! $post->content !!}
            </div>

            @foreach ($comments as $item)
                <div class="container" style="margin-bottom:7px">
                    <a class="float-left" style="margin-bottom:0px" href='#'><strong>{{ $item->users->username}}</strong></a><br>
                    <p class="text-left" style="font-size:9px;margin-bottom:2px"> {{ $item->created_at}} </p>
                    <p class="text-left"  style="margin-bottom:0;line-height:16px"> {{ $item->content}} </p>
                    <a href="" style="color:gray;font-size:12Spx"> Responder </a>
                </div>
            @endforeach


            <div class= "bloque navegacion">
                <div class= "row justify-content-center">
                    {{  $comments->links() }}
                </div>

            </div>


            @if (Auth::check())
                @if(Auth::user()->hasRole('user'))
                    <form action={{ route('addcomment') }} method="POST">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token()}}" />
                            <input name="post_id" type="hidden" value={{ $post->id }}>
                            <input name="user_id" type="hidden" value={{ Auth::id()}}>

                        <div class="row justify-content-center" style="margin-top: 30px">
                            <div class="col-10">
                                <textarea name="content" cols=100 rows=3></textarea>
                            </div>
                        </div>

                        <div class="row justify-content-center" style="margin-top: 30px">

                            <div class="col">
                                <button type="submit" class="btn btn-primary"> Guardar </button>
                            </div>

                            <div class="col">
                                <a href={{ route('viewposts') }} class="btn btn-primary" > Volver </a>
                            </div>
                        </div>
                    </form>
                @endif
            @endif

        </div>
    </body>
</html>

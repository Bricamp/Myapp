@extends('layout/layout')


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>

    <body>
        <div class="bloque">
            <h1>Login</h1>
            @if ($mensaje = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="none" data-dismiss="alert">x</button>
                <strong> {{ $mensaje }} </strong>
            </div>
            @endif

            @if(count($errors) > 0 )
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}
                @endforeach

            @endif
                <form action={{ route('checklogin') }} method="POST">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="form-group row">
                        <label for="e-mail" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="e-mail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pass" class="col-sm-2 col-form-label">Password</label>
                        <div clas="col-sm-10">
                            <input type="password" class="form-control" id="pass" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Guardar </button>
            </form>
        </div>
    </body>
</html>

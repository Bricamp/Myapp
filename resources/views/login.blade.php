<!DOCTYPE html>
<html lang="es">
    <head>
        @extends('layout/layout')
        <meta charset="utf-8">
        <title>asd</title>
    </head>

    <body>
        <div class="contenedor">
            @include('menu/menu-nav')

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Hola</div>

                        <div class="card-body">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <form method="post" action="{{ route('post_login') }}">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email fgg</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"> Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control "name="password" required autocomplete="current-password">

                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary"> Login </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

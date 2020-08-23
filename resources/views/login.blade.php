@extends('layout/layout')
<script type="text/javascript" src="{{ asset('js/nav-active.js') }}"></script>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registrarse</title>
    </head>

    <body>
        <div class="contenedor">
            @include('partial/menu-nav')

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">'Login'</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('checklogin') }}">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

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

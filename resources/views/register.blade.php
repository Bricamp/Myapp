@extends('layout/layout')


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">

        <title>Registrarse</title>
    </head>

    <body>
        <div class="contenedor">
            @include('menu/menu-nav')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Registrarse </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('createUser') }}">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"> Correo </label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"> Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control "name="password" required autocomplete="new-password">


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


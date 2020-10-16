@extends('layout/layout')

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
    </head>
    <div class="contenedor">

        <body>
            <div class="col align-self-center">
                <h1> {{ Auth::User()->username }}</h1>
            </div>

        <form action={{ route('editPassword') }} method="POST">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            {{-- <div class="form-group row">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="inputEmail" value={{ Auth::User()->email  }}>
                </div>
            </div> --}}
            @if (session('message'))
                <p>{{session('message')}}</p>
            @endif

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-8">
                <input type="password" name ="password" class="form-control" id="inputPassword">


                @if($errors->has('password'))
                    @foreach ($errors->get('password') as $error)
                        <div class="error">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-8">
                <input type="password" name ="new-password" class="form-control" id="inputPassword">
                @if($errors->has('new-password'))
                    @foreach ($errors->get('new-password') as $error)
                        <div class="error">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Confirm New Password</label>
                <div class="col-sm-8">
                <input type="password" name ="new-password-confirmation" class="form-control" id="inputPassword">
                @if($errors->has('new-password-confirmation'))
                    @foreach ($errors->get('new-password-confirmation') as $error)
                        <div class="error">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                </div>
            </div>

            <div class="row justify-content-center" style="margin-top: 30px">
                <div class="col">
                    <button type="submit" class="btn btn-primary"> Guardar </button>
                </div>

                <div class="col">
                    <a href={{ route('home') }} class="btn btn-primary" > Volver </a>
                </div>
            </div>

        </form>



        </body>
    </div>
</html>

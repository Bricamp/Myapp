<!DOCTYPE html>
<html lang="es">
    <head>
        @extends('layout/layout')

        <meta charset="utf-8">
    </head>

    <body>
        <div class="container borde">
            @include('menu/menu-nav')

            <div class="row">
                <h1> Usuarios</h1>
            </div>

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Roles</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        @for ($i=0;$i < count($user->roles->all()) ;$i++)
                            @if($i == count($user->roles->all()) - 1)
                                {{ $user->roles->get($i)->description }}
                            @else
                                {{ $user->roles->get($i)->description }},
                            @endif
                        @endfor
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>


            <div class= "bloque navegacion">
                <div class= "row justify-content-center">
                    {{  $users->links() }}
                </div>

            </div>
        </div>
    </body>
</html>

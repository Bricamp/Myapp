@extends('layout/layout')

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
    </head>

    <div class="contenedor">
        @include('partial/menu-nav')
        <h1>Bienvenidos al Blog!</h1>
            <div class="content-index">

            </div>
    </div>
</html>

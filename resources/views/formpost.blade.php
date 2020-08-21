@extends('layout/layout')

<!DOCTYPE html>
<html lang="es">
    <script src="https://cdn.tiny.cloud/1/nphh3ykughg72sc7zdtbff5v55l6n3e2trjpoinmn3j8c3j4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
        selector: "textarea",
        width: 600,
        height: 300,
        content_css_cors: true,
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });

    </script>

    <style type="text/css">
        .tox-tinymce{
        margin: 15px;
            }
    </style>

    <body>
        <div class="contenedor">
            @include('partial/menu-nav')

            <div class="bloque">
                <h1>Crear Post</h1>
                    <form action={{ route('formpost') }} method="POST">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <div class="form-group row">
                            <label for="Name" class="col-sm-2 col-form-label">Autor</label>
                            <div class="col-sm-10">
                                <input type="text" name="author" id="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Titulo" class="col-sm-2 col-form-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Descripcion" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" id="2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <textarea name="content" id='S3'></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"> Guardar </button>
                        <a href={{ route('home') }} class="btn btn-primary"> Volver </a>
                    </form>

                </div>
            </div>
    </body>
</html>

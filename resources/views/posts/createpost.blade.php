

<!DOCTYPE html>
<html lang="es">
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
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
    <head>
    </head>
    <body>
        <div class="contenedor">
            @include('menu/menu-nav')

            <div class="bloque">
                <h1>Post</h1>
                    <form action="{{ route('post_createpost') }}" method="POST">
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
                        <a href="{{ route('home') }}" class="btn btn-primary"> Volver </a>
                    </form>

                </div>
            </div>

        @extends('layout/layout')

    </body>
</html>

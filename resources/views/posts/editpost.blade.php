

<!DOCTYPE html>
<html lang="es">

    <head>
        @extends('layout/layout')

    </head>
    <body>
        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

        <div class="contenedor">
            @include('menu/menu-nav')

            <div class="bloque">
                <h1>Post</h1>
                    <form action="{{ route('post_updatepost') }}" method="POST">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="hidden" name="post_id" value="{{ $post->id }}"/>

                        <div class="form-group row">
                            <label for="Name" class="col-sm-2 col-form-label">Autor</label>
                            <div class="col-sm-10">
                                <input type="text" name="author" id="1" value="{{ $post->users->username }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Titulo" class="col-sm-2 col-form-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" id="2" value="{{ $post->title }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Descripcion" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="subject" id="2" value="{{ $post->subject  }}">
                            </div>
                        </div>

                        <textarea name="content">{!! $post->content !!}</textarea>


                        <button type="submit" class="btn btn-primary"> Guardar </button>
                    </form>

                </div>
            </div>

            <script type="text/javascript">
                tinymce.init({
                selector: "textarea"
                // width: 600,
                // height: 300,
                // content_css_cors: true,
                // plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
                // toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                });
                tinyMCE.activeEditor.setContent('custom')

            </script>
            {{-- <style type="text/css">
                .tox-tinymce{
                margin: 15px;
                    }
            </style> --}}
    </body>
</html>

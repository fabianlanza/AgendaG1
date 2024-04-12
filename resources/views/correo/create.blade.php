<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Correo</title>
</head>
<body>
    @extends('layouts.principal')
    @section('hijos') 

    <h1>Crear Correo</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/correo" method="post"> <!--el motodo post apunta a la funcion store-->
                    @csrf

                    <div class="mb-3">
                        <label for="">Codigo Correo</label>
                        <input type="text" name="CodCorreo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Correo</label>
                        <input type="text" name="Correo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Codigo Persona</label>
                        <input type="text" name="CodPersona" class="form-control">
                    </div>

                    <button type="submit">Guardar</button>

                </form>

            </div>
        </div>
    </div>

    @endsection
</body>
</html>
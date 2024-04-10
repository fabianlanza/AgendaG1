<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Personas</title>
</head>
<body>
    @extends('layouts.principal')
    @section('hijos') 

    <h1>Crear Telefono</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/telefono" method="post"> <!--el motodo post apunta a la funcion store-->
                    @csrf

                    <div class="mb-3">
                        <label for="">Codigo Telefono</label>
                        <input type="text" name="CodTelefono" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Telefono</label>
                        <input type="text" name="Telefono" class="form-control">
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
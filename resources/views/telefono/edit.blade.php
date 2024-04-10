<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de Telefonos</title>
</head>
<body>
    @extends('layouts.principal')
    @section('hijos') 

    <h1>Edita Telefonos</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/telefono/{{$telefonoEdit->id}}" method="post"> <!--el motodo post apunta a la funcion store-->
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Codigo Telefono</label>
                        <input type="text" name="CodTelefono" class="form-control" value="{{$telefonoEdit->CodTelefono}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Telefono</label>
                        <input type="text" name="Telefono" class="form-control" value="{{$telefonoEdit->Telefono}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Codigo Persona</label>
                        <input type="text" name="CodPersona" class="form-control" value="{{$telefonoEdit->CodPersona}}">
                    </div>

                    <button type="submit">Guardar</button>

                </form>

            </div>
        </div>
    </div>

    @endsection
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de Personas</title>
</head>
<body>
    @extends('layouts.principal')
    @section('hijos') 

    <h1>Edita Personas</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="/persona/{{$personaEdit->id}}" method="post"> <!--el motodo post apunta a la funcion store-->
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Codigo Persona</label>
                        <input type="text" name="CodPersona" class="form-control" value="{{$personaEdit->CodPersona}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Nombre</label>
                        <input type="text" name="Nombre" class="form-control" value="{{$personaEdit->Nombre}}">
                    </div>

                    <div class="mb-3">
                        <label for="">Apellido</label>
                        <input type="text" name="Apellido" class="form-control" value="{{$personaEdit->Apellido}}">
                    </div>

                    <button type="submit">Guardar</button>

                </form>

            </div>
        </div>
    </div>

    @endsection
</body>
</html>
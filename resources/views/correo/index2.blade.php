<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>
<body>



@extends('layouts.principal')
@section('hijos')   
    <h1>Modulo de Correo</h1>
    <h2 class="text-center">Correo de {{$persona->Nombre}}, {{$persona->CodPersona}}</h2>
    <a href="/correo/create" class="btn btn-primary">Agregar Correo</a>

    <table class="table">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>CodCorreo</th>
                <th>Correo</th>
                <th>CodPersona</th>
                <th>Acciones</th>
            </tr>
        </thead>
    

        <tbody>
        @foreach($correos as $correo)
        @if($correo->CodPersona == $persona->CodPersona)
            <tr>
                <th>{{$correo->id}}</th>    
                <th>{{$correo->CodCorreo}}</th>  
                <th>{{$correo->Correo}}</th>  
                <th>{{$correo->CodPersona}}</th>  
                <th>
                    <a href="/correo/{{$correo->id}}/edit" class="btn btn-outline-warning">Editar</a>
                    <button class="btn btn-outline-danger">Eliminar</button>
                </th>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>

@endsection
</body>
</html>
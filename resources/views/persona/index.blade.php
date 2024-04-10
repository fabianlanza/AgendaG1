<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
@extends('layouts.principal')
@section('hijos')   
    <h1>Modulo de Personas</h1>

    <a href="persona/create" class="btn btn-primary">Agregar Persona</a>

    <table class="table">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>CodPersona</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
    

        <tbody>
        @foreach($personas as $persona)
            <tr>
                <th>{{$persona->id}}</th>    
                <th>{{$persona->CodPersona}}</th>  
                <th>{{$persona->Nombre}}</th>  
                <th>{{$persona->Apellido}}</th> 
                 
                <th>
                    <a href="/persona/{{$persona->id}}/edit" class="btn btn-outline-warning">Editar</a>
                    <a href="/telefono/{{$persona->id}}" class="btn btn-outline-success">Telefono</a>
                    <a href="/correo" class="btn btn-outline-info">Correo</a>
                    <th>
                        <form action="/persona/{{$persona->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-outline-danger">Eliminar</button> 
                        </form>
                    </th>
                </th>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
</body>
</html>
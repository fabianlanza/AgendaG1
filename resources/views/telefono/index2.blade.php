<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telefono</title>
</head>
<body>



@extends('layouts.principal')
@section('hijos')   
    <h1>Modulo de Telefono</h1>
    <h2 class="text-center">Telefono de {{$persona->Nombre}}, {{$persona->CodPersona}}</h2>
    <a href="/telefono/create/{{$persona->CodPersona}}" class="btn btn-primary">Agregar Telefono</a>

    <table class="table">
        
        <thead>
            <tr>
                <th>ID</th>
                <th>CodTelefono</th>
                <th>Telefono</th>
                <th>CodPersona</th>
                <th>Acciones</th>
            </tr>
        </thead>
    

        <tbody>
        @foreach($telefonos as $telefono)
        @if($telefono->CodPersona == $persona->CodPersona)
            <tr>
                <th>{{$telefono->id}}</th>    
                <th>{{$telefono->CodTelefono}}</th>  
                <th>{{$telefono->Telefono}}</th>  
                <th>{{$telefono->CodPersona}}</th>  
                <th>
                    <form action="/telefono/{{$telefono->id}}" method="POST">
                        @csrf
                        @method('Delete')
                        <a href="/telefono/{{$telefono->id}}/edit" class="btn btn-outline-warning">Editar</a>
                        <button class="btn btn-outline-danger">Eliminar</button>
                    </form>
                </th>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>

@endsection
</body>
</html>
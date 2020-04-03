@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="row">
        <div class="col">
            <h2 class="text-center">Lista de Usuarios</h2>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Cambiar de estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->telefono }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

@endsection
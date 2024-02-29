<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <h1>Listado de registro de plagas</h1>
    <a href="{{ route('pest.create') }}">Agregar Registro</a>
    <table>
        <th>
            <tr>
                <td>ID</td>
                <td>Cultivo</td>
                <td>Enfermadad/Plaga</td>
                <td>Ubicación</td>
                <td>Nivel</td>
                <td>Acciones</td>
            </tr>
        </th>
        <tbody>
            @foreach ($pests as $pest)
            <tr>
                <td>{{ $pest -> id }}</td>
                <td>{{ $pest -> crop }}</td>
                <td>{{ $pest -> name }}</td>
                <td>{{ $pest -> location }}</td>
                <td>{{ $pest -> level }}</td>
                <td>
                    <a href="{{ route('pest.show', $pest) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
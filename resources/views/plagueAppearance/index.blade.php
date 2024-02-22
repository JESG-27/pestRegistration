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
    <a href="{{ route('registro.create') }}">Agregar Registro</a>
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
            @foreach ($plagueAppearances as $plagueAppearance)
            <tr>
                <td>{{ $plagueAppearance -> id }}</td>
                <td>{{ $plagueAppearance -> crop }}</td>
                <td>{{ $plagueAppearance -> name }}</td>
                <td>{{ $plagueAppearance -> location }}</td>
                <td>{{ $plagueAppearance -> level }}</td>
                <td>
                    <a href="{{ route('registro.show', $plagueAppearance) }}">Ver</a>
                    <a href="{{ route('registro.edit', $plagueAppearance) }}">Modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
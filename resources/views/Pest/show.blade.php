<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
</head>
<body>
    <h1>Registro: {{ $pest->id }}</h1>
    <ul>
        <li>Cultivo: {{ $pest->crop }}</li>
        <li>Enfermedad/Plaga: {{ $pest->name }}</li>
        <li>Ubicación: {{ $pest->location }}</li>
        <li>Nivel: {{ $pest->level }}</li>
    </ul>
    <a href="{{ route('pest.edit', $pest) }}">Modificar</a>
    <form action="{{ route('pest.destroy', $pest) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
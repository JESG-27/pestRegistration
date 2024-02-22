<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista</title>
</head>
<body>
    {{$plagueAppearance}}
    <h1>Registro: {{ $plagueAppearance->id }}</h1>
    <ul>
        <li>Cultivo: {{ $plagueAppearance->crop }}</li>
        <li>Enfermedad/Plaga: {{ $plagueAppearance->name }}</li>
        <li>Ubicación: {{ $plagueAppearance->location }}</li>
        <li>Nivel: {{ $plagueAppearance->level }}</li>
    </ul>
</body>
</html>
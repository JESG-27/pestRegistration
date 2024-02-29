<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Plaga</title>
</head>
<body>
    <h1>Registrar Aparición de Plaga</h1>
    <form method="POST" action="{{ route('pest.update', $pest) }}">
        @csrf
        @method('PATCH')
        <label for="cultivo">Cultivo</label>
        <select name="crop" id="cultivo" required>
            <option value="maiz" @selected($pest->crop == 'maiz')>Maíz</option>
            <option value="limon" @selected($pest->crop == 'limon')>Limon</option>
            <option value="agave" @selected($pest->crop == 'agave')>Agave</option>
            <option value="aguacate" @selected($pest->crop == 'aguacate')>Aguacate</option>
        </select>
        @error('crop')
            <div>{{ $message }}</div>
        @enderror

        <label for="nombre">Enfermedad/Plaga</label>
        <select name="name" id="nombre" required>
            <option value="hongo" @selected($pest->name == 'hongo')>Hongo</option>
            <option value="bacteria" @selected($pest->name == 'bacteria')>Bacteria</option>
            <option value="insecto" @selected($pest->name == 'insecto')>Insectos</option>
            <option value="maleza" @selected($pest->name == 'maleza')>Maleza</option>
        </select>
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label for="ubicacion">Ubicación</label>
        <select name="location" id="ubicacion" required>
            <option value="arandas" @selected($pest->location == 'arandas')>Arandas</option>
            <option value="tepatitlan" @selected($pest->location == 'tepatitlan')>Tepatitlan</option>
            <option value="atotonilco" @selected($pest->location == 'atotonilco')>Atotonilco</option>
            <option value="jesus maria" @selected($pest->location == 'jesus maria')>Jesús María</option>
        </select>
        @error('location')
            <div>{{ $message }}</div>
        @enderror

        <label for="nivel">Nivel</label>
        <select name="level" id="nivel" required>
            <option value="bajo" @selected($pest->level == 'bajo')>Bajo</option>
            <option value="medio" @selected($pest->level == 'medio')>Medio</option>
            <option value="alto" @selected($pest->level == 'alto')>Alto</option>
        </select>
        @error('level')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
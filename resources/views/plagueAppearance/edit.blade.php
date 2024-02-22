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
    {{ $plagueAppearance }}
    <form method="POST" action="">
        @csrf
        <label for="cultivo">Cultivo</label>
        <select name="crop" id="cultivo" required>
            <option value="maiz" @selected($plagueAppearance->crop == 'maiz')>Maíz</option>
            <option value="limon" @selected($plagueAppearance->crop == 'limon')>Limon</option>
            <option value="agave" @selected($plagueAppearance->crop == 'agave')>Agave</option>
            <option value="aguacate" @selected($plagueAppearance->crop == 'aguacate')>Aguacate</option>
        </select>
        @error('crop')
            <div>{{ $message }}</div>
        @enderror

        <label for="nombre">Enfermedad/Plaga</label>
        <select name="name" id="nombre" required>
            <option selected value="">-</option>
            <option value="hongo" @selected(old('hongo') == 'hongo')>Hongo</option>
            <option value="bacteria" @selected(old('bacteria') == 'bacteria')>Bacteria</option>
            <option value="insecto" @selected(old('insecto') == 'insecto')>Insectos</option>
            <option value="maleza" @selected(old('maleza') == 'maleza')>Maleza</option>
        </select>
        @error('name')
            <div>{{ $message }}</div>
        @enderror

        <label for="ubicacion">Ubicación</label>
        <select name="location" id="ubicacion" required>
            <option selected value="">-</option>
            <option value="arandas" @selected(old('arandas') == 'arandas')>Arandas</option>
            <option value="tepatitlan" @selected(old('tepatitlan') == 'tepatitlan')>Tepatitlan</option>
            <option value="atotonilco" @selected(old('atotonilco') == 'atotonilco')>Atotonilco</option>
            <option value="jesus maria" @selected(old('jesus maria') == 'jesus maria')>Jesús María</option>
        </select>
        @error('location')
            <div>{{ $message }}</div>
        @enderror

        <label for="nivel">Nivel</label>
        <select name="level" id="nivel" required>
            <option selected value="">-</option>
            <option value="bajo" @selected(old('bajo') == 'bajo')>Bajo</option>
            <option value="medio" @selected(old('medio') == 'medio')>Medio</option>
            <option value="alto" @selected(old('alto') == 'alto')>Alto</option>
        </select>
        @error('level')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
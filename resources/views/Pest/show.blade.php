<x-crud-layout>
    <div>
        <h1>Registro: {{ $pest->id }}</h1>
        <ul>
            <li>Cultivo: {{ $pest->crop }}</li>
            <li>Enfermedad/Plaga: {{ $pest->name }}</li>
            <li>Ubicación: {{ $pest->location }}</li>
            <li>Nivel: {{ $pest->level }}</li>
            <li>Comentario: {{ $pest->comment }}</li>
        </ul>
        <a href="{{ route('pest.edit', $pest) }}">Modificar</a>
        <form action="{{ route('pest.destroy', $pest) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
</x-crud-layout>
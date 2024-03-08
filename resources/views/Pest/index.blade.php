<x-crud-layout>
    <div>
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
                    <td>Comentario</td>
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
                    <td>{{ $pest -> comment }}</td>
                    <td>
                        <a href="{{ route('pest.show', $pest) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-crud-layout>
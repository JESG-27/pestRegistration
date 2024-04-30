<x-crud-layout>
    <h1>Listado de Plagas/Enfermedades</h1>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
            <th>
                <tr>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">ID</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Nombre</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Descripción</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Acciones</td>
                </tr>
            </th>
            <tbody>
                @foreach ($pests as $pest)
                <tr>
                    <td>{{ $pest -> id }}</td>
                    <td>{{ $pest -> name }}</td>
                    <td>{{ $pest -> description }}</td>
                    <td class="badge badge-sm bg-gradient-success">
                        <a href="{{ route('pest.show', $pest) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</x-crud-layout>
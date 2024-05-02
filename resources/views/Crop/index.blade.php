<x-crud-layout>
    <h1>Listado de Cultivos</h1>
    <a class="badge badge-sm bg-gradient-success" href="{{ route('crop.create') }}">Agregar</a>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
            <th>
                <tr>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">ID</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Cultivo</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Descripción</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Acciones</td>
                </tr>
            </th>
            <tbody>
                @foreach ($crops as $crop)
                <tr>
                    <td>{{ $crop -> id }}</td>
                    <td>{{ $crop -> name }}</td>
                    <td>{{ $crop -> description }}</td>
                    <td class="badge badge-sm bg-gradient-success">
                        <a href="{{ route('crop.show', $crop) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</x-crud-layout>
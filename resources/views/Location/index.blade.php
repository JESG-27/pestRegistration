<x-crud-layout>
    <h1>Listado de Ubicaciones</h1>
    <a class="badge badge-sm bg-gradient-success" href="{{ route('location.create') }}">Agregar</a>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
            <th>
                <tr>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">ID</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Nombre</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Estado</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Acciones</td>
                </tr>
            </th>
            <tbody>
                @foreach ($locations as $location)
                <tr>
                    <td>{{ $location -> id }}</td>
                    <td>{{ $location -> name }}</td>
                    <td>{{ $location -> state }}</td>
                    <td class="badge badge-sm bg-gradient-success">
                        <a href="{{ route('location.show', $location) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</x-crud-layout>
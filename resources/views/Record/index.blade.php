<x-crud-layout>
    <h1>Listado de registro de plagas</h1>
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
            <th>
                <tr>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">ID</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Cultivo</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Enfermadad/Plaga</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Ubicación</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Nivel</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Comentario</td>
                    <td class="text-uppercase text-secondary text-s font-weight-bolder opacity-7">Acciones</td>
                </tr>
            </th>
            <tbody>
                @foreach ($records as $record)
                <tr>
                    <td>{{ $record -> id }}</td>
                    <td>{{ $record -> crop }}</td>
                    <td>{{ $record -> name }}</td>
                    <td>{{ $record -> location }}</td>
                    <td>{{ $record -> level }}</td>
                    <td>{{ $record -> comment }}</td>
                    <td class="badge badge-sm bg-gradient-success">
                        <a href="{{ route('record.show', $record) }}">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</x-crud-layout>
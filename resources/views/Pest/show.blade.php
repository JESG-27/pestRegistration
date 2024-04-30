<x-crud-layout>
    <div class="row min-vh-80">
        <div class="col-6 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Plaga/Enfermedad: {{ $pest->id }}</h6>
              </div>
            </div>
            <div class="card-body">
                <ul>
                    <li>Plaga/Enfermedad</li>
                    <ul>
                      <li>{{ $pest->name }}</li>
                      <li>{{ $pest->description }}</li>
                    </ul>
                    <li>Registros</li>
                    <ul>
                      <li>{{ count($records) }}</li>
                    </ul>
                </ul>
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('pest.edit', $pest) }}">Editar</a>
                    </div>
                    <div class="col-6 text-end">
                        <form action="{{ route('pest.destroy', $pest) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-gradient-dark mb-0">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Registros: {{ count($records) }}</h6>
            </div>
          </div>
          <div class="card-body">
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
                      <td>{{ $record -> crop -> name }}</td>
                      <td>{{ $record -> pest -> name }}</td>
                      <td>{{ $record -> location -> name }}, {{ $record -> location -> state }}</td>
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
        </div>
      </div>
</x-crud-layout>
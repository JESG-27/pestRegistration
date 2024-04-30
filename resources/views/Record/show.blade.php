<x-crud-layout>
    <div class="row min-vh-80">
        <div class="col-6 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Registro: {{ $record->id }}</h6>
              </div>
            </div>
            <div class="card-body">
                <ul>
                    <li>Cultivo</li>
                    <ul>
                      <li>{{ $record->crop->name }}</li>
                      <li>{{ $record->crop->description }}</li>
                    </ul>
                    <li>Enfermedad/Plaga</li>
                    <ul>
                      <li>{{ $record->pest->name }}</li>
                      <li>{{ $record->pest->description }}</li>
                    </ul>
                    <li>Ubicación:</li>
                    <ul>
                      <li>{{ $record->location->name }}, {{ $record->location->state }}</li>
                    </ul>
                    <li>Nivel:</li>
                    <ul>
                      <li>{{ $record->level }}</li>
                    </ul>
                    <li>Comentario:</li>
                    <ul>
                      <li>{{ $record->comment }}</li>
                    </ul>
                </ul>
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <a class="btn bg-gradient-dark mb-0" href="{{ route('record.edit', $record) }}">Editar</a>
                    </div>
                    <div class="col-6 text-end">
                        <form action="{{ route('record.destroy', $record) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-gradient-dark mb-0">Eliminar</button>
                        </form>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
</x-crud-layout>
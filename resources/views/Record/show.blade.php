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
                    <li>Imagen:<br>
                      <img src="{{ asset('storage/' . $record->files->first()->path) }}" width="150px"><br>
                      <a href="{{ route('record.downloadFile', $record->files->first()) }}">Descargar</a>
                    </li>
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
      <form method="POST" action="{{ route('record.sendReport') }}">
        @csrf
        <input type="hidden" name="record" id="record" value="{{ $record->id }}">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Enviar reporte de registros</h6>
                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Enviar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <p>Se enviará al correo ingresado la colección completa de registros</p>
                    </div>
                </div>
            </div>
        <div class="card-body p-3 pb-0">
            <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="mail" class="text-dark mb-1 font-weight-bold text-sm">Correo</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <input type="email" name="mail" id="mail" required>
                        @error('mail')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
            </ul>
        </div>
    </form>
</x-crud-layout>
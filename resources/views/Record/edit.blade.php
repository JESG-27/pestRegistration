<x-crud-layout>
    <div class="col-lg-4">
        <form method="POST" action="{{ route('record.update', $record) }}">
            @csrf
            @method('PATCH')
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Editar Aparición de Plaga</h6>
                            </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Actualizar</button>
                        </div>
                    </div>
                </div>
            <div class="card-body p-3 pb-0">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="crop" class="text-dark mb-1 font-weight-bold text-sm">Cultivo</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="crop" id="crop" required>
                            @foreach ($crops as $crop)
                                <option value="{{ $crop->id }}" @selected( $record->crop_id  == $crop->id ) >{{ $crop->name }}</option>
                            @endforeach
                        </select>
                        @error('crop')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="pest" class="text-dark mb-1 font-weight-bold text-sm">Enfermedad/Plaga</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="pest" id="pest" required>
                            @foreach ($pests as $pest)
                                <option value="{{ $pest->id }}" @selected( $record->pest_id ==  $pest->id )>{{ $pest->name }}</option>
                            @endforeach
                        </select>
                        @error('pest')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="location" class="text-dark mb-1 font-weight-bold text-sm">Ubicación</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="location" id="location" required>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" @selected( $record->location_id == $location->id )>{{ $location->name }}, {{ $location->state }}</option>
                            @endforeach
                        </select>
                        @error('location')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="level" class="text-dark mb-1 font-weight-bold text-sm">Nivel</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="level" id="level" required>
                            <option value="bajo" @selected($record->level == 'bajo')>Bajo</option>
                            <option value="medio" @selected($record->level == 'medio')>Medio</option>
                            <option value="alto" @selected($record->level == 'alto')>Alto</option>
                        </select>
                        @error('level')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="comment" class="text-dark mb-1 font-weight-bold text-sm">Comentario</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <textarea name="comment" id="comment" required>{{ $record->comment }}</textarea>
                        @error('comment')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                </ul>
            </div>
        </form>
    </div>
</x-crud-layout>
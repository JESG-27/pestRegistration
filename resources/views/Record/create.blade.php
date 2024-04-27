<x-crud-layout>
    <div class="col-lg-4">
        <form method="POST" action="/record">
            @csrf
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">Registrar Aparición de Plaga</h6>
                            </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Registrar</button>
                        </div>
                    </div>
                </div>
            <div class="card-body p-3 pb-0">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="cultivo" class="text-dark mb-1 font-weight-bold text-sm">Cultivo</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="crop" id="cultivo" required>
                            <option selected value="">-</option>
                            @foreach ($crops as $crop)
                                <option value="{{ $crop->id }}" @selected(old('{{ $crop->name }}') == '{{ $crop->name }}')>{{ $crop->name }}</option>
                            @endforeach
                        </select>
                        @error('crop')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="nombre" class="text-dark mb-1 font-weight-bold text-sm">Enfermedad/Plaga</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="name" id="nombre" required>
                            <option selected value="">-</option>
                            @foreach ($pests as $pest)
                                <option value="{{ $pest->id }}" @selected(old('{{ $pest->name }}') == '{{ $pest->name }}')>{{ $pest->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="ubicacion" class="text-dark mb-1 font-weight-bold text-sm">Ubicación</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="location" id="ubicacion" required>
                            <option selected value="">-</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" @selected(old('{{ $location->name }}') == '{{ $location->name }}')>{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('location')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="nivel" class="text-dark mb-1 font-weight-bold text-sm">Nivel</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <select name="level" id="nivel" required>
                            <option selected value="">-</option>
                            <option value="bajo" @selected(old('bajo') == 'bajo')>Bajo</option>
                            <option value="medio" @selected(old('medio') == 'medio')>Medio</option>
                            <option value="alto" @selected(old('alto') == 'alto')>Alto</option>
                        </select>
                        @error('level')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                    <div class="d-flex flex-column">
                        <label for="comentario" class="text-dark mb-1 font-weight-bold text-sm">Comentario</label>
                    </div>
                    <div class="d-flex align-items-center text-sm">
                        <textarea name="comment" id="comentario" required></textarea>
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
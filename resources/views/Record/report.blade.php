<x-crud-layout>
    <div class="col-lg-4">
        <form method="POST" action="{{ route('record.sendReport') }}">
            @csrf
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Enviar reporte de registros</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-outline-primary btn-sm mb-0">Registrar</button>
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
                            </select>
                            @error('mail')
                                <div>{{ $message }}</div>
                            @enderror
                        </div>
                      </li>
                </ul>
            </div>
        </form>
    </div>
</x-crud-layout>
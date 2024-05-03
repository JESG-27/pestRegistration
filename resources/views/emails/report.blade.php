<x-mail::message>

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
                    <li>{{ $crop->name }}</li>
                    <li>{{ $crop->description }}</li>
                    </ul>
                    <li>Enfermedad/Plaga</li>
                    <ul>
                    <li>{{ $pest->name }}</li>
                    <li>{{ $pest->description }}</li>
                    </ul>
                    <li>Ubicación:</li>
                    <ul>
                    <li>{{ $location->name }}, {{ $location->state }}</li>
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
                        <img src="{{ $message->embed($imagePath) }}" alt="image">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</x-mail::message>
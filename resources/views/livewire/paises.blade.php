<div>

    <!-- Formulario para agregar un nuevo país -->
    <form class="mb-4" wire:submit="save">
        <!-- Campo de entrada para el nombre del país -->
        <x-input placeholder="ingrese un pais" wire:model="pais" wire:keydown.space='increment'/>
        <!-- Componente de entrada personalizado con enlace de datos bidireccional a la propiedad 'pais' -->

        <!-- Botón para agregar el país -->
        <x-button>
            Agregar
        </x-button>
        <!-- Componente de botón personalizado -->
    </form>

    <!-- Lista de países -->
    <ul class="list-disc list-inside space-y-2">
        <!-- Lista con viñetas dentro del contenedor y espaciado vertical entre elementos -->
        @foreach($paises as $key => $pais)
            <!-- Iteración sobre la lista de países -->
            <!-- Elemento de la lista con un identificador único para cada país -->
            <li wire:key='pais-{{ $key }}'>
                <!-- Clave única para cada elemento de la lista -->

                <span wire:mouseenter='changeActive("{{ $pais}}")'>
                    {{ $key }} - {{$pais}} 
                </span>
                <!-- Span que muestra el índice y el nombre del país, y cambia la propiedad 'active' al pasar el ratón -->

                <!-- Botón para eliminar el país -->
                <x-danger-button wire:click="delete({{$key}})">X</x-danger-button>
                <!-- Componente de botón de peligro personalizado que llama a la función 'delete' al hacer clic -->
            </li>
        @endforeach
        <!-- Fin de la iteración sobre la lista de países -->
    </ul>
    <!-- Fin de la lista de países -->

    {{ $active }}
    {{ $count }}
    <!-- Muestra la propiedad 'active' -->
</div>
<!-- Fin del contenedor principal -->
<div>


    <div class="bg-white shadow rounded-lg p-6 mb-8">
    
    <form wire:submit='save'>
    
        <div class="mb-4">
            <x-label>
                Nombre            
            </x-label>
            <x-input class="w-full" wire:model='title' require/>
        </div>

        <div>
        
            <x-label>
                Contenido
            </x-label>
            <x-textarea class='w-full' wire:model='content' require>
            
            </x-textarea>
        </div>

        <div>
            <x-label>
                Categoria
            </x-label>

            <x-select class='w-full' wire:model='category_id' require>
                <option value="" disabled>Seleccione una categoria</option>
                @foreach ($categorias as $categoria )
                    <option value="{{ $categoria->category_id }}">{{ $categoria->name }}</option>
                @endforeach
            </x-select>
        </div>


        <div>
            <x-label>
                Etiquetas
            </x-label>

            <ul>
                @foreach ($tags as $etiqueta )
                    <li>
                        <label>
                            <x-checkbox type="checkbox" value="{{ $etiqueta->tag_id }}" wire:model='selected_tags'/>
                            {{ $etiqueta->name }}
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="flex justify-end">

            <x-button>
                Guardar
            </x-button>
        </div>

    </form>
    
    </div>

    <div  class="bg-white shadow rounded-lg p-6">

    <ul class='list-disc list-inside'>
        @foreach ($posts as $post)        
            <li>
                {{ $post->title }}
            </li>
        @endforeach
    </ul>
    </div>
</div>

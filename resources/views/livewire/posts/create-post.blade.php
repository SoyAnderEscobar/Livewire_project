<div>

    <!-- <h1>{{$title}}</h1>

    <h2>Usuario</h2>
    <span>{{$name}}</span>
    <br>
    <span>{{$email}}</span> -->
    <div>
        
        <x-input type="text" wire:model.live="name"/>
        <x-button wire:click="save">
            Save
        </x-button>
    </div>

    {{ $name }}
    

</div>

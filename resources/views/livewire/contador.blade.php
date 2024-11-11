<div>
    {{-- The Master doesn't talk, he acts. --}}

    <h1 class="text-2xl font-bold text-center">Contador</h1>
    <x-button wire:click="decrement">-</x-button>
    <span class="mx-2">{{$count}}</span>
    <x-button wire:click="increment(2)">+</x-button>

</div>

<?php

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{

    public $count = 0;

    public function increment($cantidad=1)
    {
        $this->count+= $cantidad;
    }
    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.contador');
    }
}

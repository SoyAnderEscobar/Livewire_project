<?php

namespace App\Livewire;

use Livewire\Component;

class Paises extends Component
{

    public $paises = [
        'Perú',
        'Uruguay',
        'Venezuela',
    ];

    public $pais;

    public $active;

    public $count;
    public function save()
    {
        // agregar un nuevo pais al array
        array_push($this->paises, $this->pais);

        // $this->pais = '';

        // en caso de resetear un campo
        $this->reset('pais');
        // en caso de resetear todos los campos
        // $this->reset(['pais', 'otro_campo']);
    }

    public function delete($index)
    {
        // eliminar un pais del array
        unset($this->paises[$index]);
    }

    public function changeActive($index)
    {
        $this->active = $index;
    }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.paises');
    }
}

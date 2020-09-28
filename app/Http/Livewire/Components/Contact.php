<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Contact extends Component
{
    public $naam, $telefoonnummer, $bericht, $onderwerp;

    public function mount(){
        $this->naam = 'john doe';
    }

    public function test(){
        $this->naam = 'test';
    }

    public function render()
    {
        return view('livewire.components.contact');
    }
}

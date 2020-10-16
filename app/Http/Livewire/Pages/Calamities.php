<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Calamities extends Component
{
    public function render()
    {
        return view('livewire.pages.calamities')
            ->layout('layouts.site');
    }
}

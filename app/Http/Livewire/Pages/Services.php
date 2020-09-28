<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        return view('livewire.pages.services')
            ->layout('layouts.site');
    }
}

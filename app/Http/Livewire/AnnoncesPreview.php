<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnnoncesPreview extends Component
{
    public function render()
    {
        return view('livewire.annonces-preview')->layout('App');
    }
}

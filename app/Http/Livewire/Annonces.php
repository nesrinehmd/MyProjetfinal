<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Annonces extends Component
{
    public function render()
    {
        return view('livewire.annonces')->layout('App');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireSante extends Component
{
    public function render()
    {
        return view('livewire.formulaire-sante')->layout('App');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireVehicule extends Component
{
    public function render()
    {
        return view('livewire.formulaire-vehicule')->layout('App');
    }
}

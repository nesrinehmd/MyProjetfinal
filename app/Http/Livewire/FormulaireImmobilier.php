<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireImmobilier extends Component
{
    public function render()
    {
        return view('livewire.formulaire-immobilier')->layout('App');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireVoyage extends Component
{
    public function render()
    {
        return view('livewire.formulaire-voyage')->layout('App');
    }
}

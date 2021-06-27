<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireEmplois extends Component
{
    public function render()
    {
        return view('livewire.formulaire-emplois')->layout('App');
    }
}

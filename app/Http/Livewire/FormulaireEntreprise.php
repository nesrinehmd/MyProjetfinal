<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulaireEntreprise extends Component
{
    public function render()
    {
        return view('livewire.formulaire-entreprise')->layout('App');
    }
}

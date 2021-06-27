<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class CategorieController extends Controller
{
    public function InsertCategorie(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|unique:categorie',
        ],
        [
            'name.required' => 'Saisissez le nom correcte de la categorie',
        ]);
        Categorie::insert([
            'name' => $request->name, //relier avec la var 'name' saisie par l"utilisateur 
            /*'user_id' => Auth::user()->id, // recuperer l'id de l'utl authentifier*/
            'created_at' => Carbon::now()
        ]);
    }
}

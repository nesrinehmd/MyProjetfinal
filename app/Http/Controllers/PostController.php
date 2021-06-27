<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
   /* public function insertPost(Request $request)
    {
        Post::insert([
            'nom' => $request->nom,
            'Description' => $request->Description,
            'user_id' => Auth::user()->id, //recuperer id de l'utilisateur authentifier
        ]);
    }*/

    public function afficherAnnonce()
    {
        /*$data = array(
            'list' => DB::table('article')->get()
        );*/

        $articles = DB::table('annonce')->orderBy('created_at', 'DESC')->paginate(5);//recupérer ts les articles ordonné par les plus recents avec une pagination de 5 articles par pages
        return view('AfficherAnnonce', compact('annonce'));//envoyer article comme variable pour l'affichage
        //return view('annonce', compact('annonce'));
    }

}

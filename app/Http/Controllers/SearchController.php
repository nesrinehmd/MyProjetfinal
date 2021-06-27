<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\TypeCategorie;
use App\Models\Post;

class SearchController extends Controller
{
   /* public function search()
    {
        $search_text = $_GET['query'];
        //$categorie = Categorie::where('name', 'LIKE', '%'.$search_text.'%')->with('TypeCategorie')->get();
        $categorie = Categorie::where('name', 'LIKE', '%'.$search_text.'%')->get();
        $id_cat = Categorie::where('name', 'LIKE', '%'.$search_text.'%')->get('id');
        $post = Post::where('cat_id', 'LIKE', '%'.$id_cat.'%')->get();

        return view('search.search', compact('post'));
    }*/

    public function search(Request $request)
    {
       // $search_text = $_GET['nom'];
       // $search_text = $request->nom;

       /* $verif = DB::table('article')->where('nom', $search_text)->value('nom');

        if($verif != null){
            $id_categorie = DB::table('article')->where('nom', $search_text)->value('id_categorie');
            $nom_categorie = DB::table('categorie')->where('id', $id_categorie)->value('nom');
            $data = array(
                'list' => DB::table('article')->get()->where('nom', $search_text)
            );

            $datasearch = [
                'list' => $data,
                'nom_categorie' => $nom_categorie,
            ];

            return view('app', compact('datasearch'));

        }*/


        $search_text = $request->nom;

        $id_categorie = DB::table('article')
        ->where('nom', 'LIKE', '%', $search_text, '%')
        ->value('id_categorie');

        $nom_categorie = DB::table('categorie')
        ->where('id', 'LIKE', '%', $id_categorie, '%')
        ->get('nom');

        $result_article = DB::table('article')
        ->where('nom', 'LIKE', '%', $search_text, '%')
        ->get();
        //si on recupere uniquement l'article et sa description san la categorie
        /*$result_article = DB::table('article')
        ->where('nom', 'LIKE', '%', $search_text, '%')
        ->value('nom', 'description)
        ->ordredBy('created_at', 'DESC');*/


        $datasearch = [
            'article' =>$result_article,
            'nom_categorie' =>$nom_categorie
        ];

        return response()->json(['success'=> true, 'article', 'datasearch'=>$datasearch]);



    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Categourie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('App');
    }
    public function GetCategourie(){
        $cat = Categourie:: all();
        return view('livewire.categourie', ['cat'=>$cat]);
    }
    

    public function add(Request $request){
        $request->validate([
        'name'=>'required'
        ]);
        $query = DB::table('categourie')->insert([
            'name'=>$request->input('name')
        ]);
        
        if ($query){
            return back()->with('success', 'data have been succesful insereted ');
        }
        }
        
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table ="categorie";
    public function typecategorie(){
        //return $this-> hasMany(TypeCategorie::class);
        return $this->hasMany('App\Models\TypeCategorie');
    }
    public function post(){
        //return $this-> hasMany(Post::class);
        $this->hasMany('App\Models\Post');
    }

}

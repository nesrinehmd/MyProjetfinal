<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategorie extends Model
{
    use HasFactory;
    protected $table ="Type_Categorie";
    public function categorie(){
        //return $this->belongsTo(Categorie::class); 
        return $this->belongsTo('App\Models\Categorie');   
    }
}

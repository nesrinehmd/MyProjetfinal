<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table ="post";
    public function categourie(){
        //return $this->belongsTo(Categourie::class);
        return $this->belongsTo('App\Models\Categorie');   
    
    }
}

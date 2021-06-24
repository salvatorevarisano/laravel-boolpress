<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
       //relazione con posts 

       public function posts() {
        return $this->belongsToMany('App\Post');
    }
}

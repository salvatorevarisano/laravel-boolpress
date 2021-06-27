<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'content' 
    ];


    //relazione con categories 
    // in questo caso i post possono avere solo 1 categoria ma una categoria potrebbe essere assegnata a più post
    //posts - categories
    public function category() {
        return $this->belongsTo('App\Category');
    }


    //relazione con tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}

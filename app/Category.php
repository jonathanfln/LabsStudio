<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use SoftDeletes;
    
    public function articles()
    {
        return $this->hasMany('App\Article', 'categories_id', 'id');
    }
}

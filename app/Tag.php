<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    use SoftDeletes;
    
    public function articles()
    {
        return $this->belongsToMany('App\Article', 'articles_has_tags', 'tags_id', 'articles_id');
    }
}

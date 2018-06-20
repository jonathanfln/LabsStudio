<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'users_id', 'id');
    }

    public function article()
    {
        return $this->belingsTo('App\Article', 'article_id', 'id');
    }
}

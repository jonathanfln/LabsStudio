<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use SoftDeletes;
    
    public function users()
    {
        return $this->hasMany('App\User', 'roles_id', 'id');
    }
}

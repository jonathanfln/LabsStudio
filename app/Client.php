<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use SoftDeletes;
    
    public function testimonials()
    {
        return $this->hasMany('App\Testmonial', 'clients_id', 'id');
    }
}
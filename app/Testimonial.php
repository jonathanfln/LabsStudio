<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{

    use SoftDeletes;
    
    public function client()
    {
        return $this->belongsTo('App\Client', 'clients_id', 'id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ImgCarousel extends Model
{

    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'imgCarousels';
}

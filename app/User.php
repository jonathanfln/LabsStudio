<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role', 'roles_id', 'id');
    }

    public function articles()
    {
        return $this->hasMany('App\Article', 'users_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'users_id', 'id');
    }

    public function admin()
    {
        return Auth::user()->role->slug == "admin";
    }

    public function editor()
    {
        return Auth::user()->role->slug == "editor";
    }
}

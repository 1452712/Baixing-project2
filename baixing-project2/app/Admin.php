<?php

namespace App;
use Illuminate\Database\Eloquent\Model  as Eloquent;;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Admin extends  Eloquent  implements Authenticatable
{
    use AuthenticableTrait;
    //
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
}

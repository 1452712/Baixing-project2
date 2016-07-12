<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = 'admins';
    public $aid = 'id';
    public $email = 'email';
    public $password = 'password';
    public $real_name = 'real_name';


}

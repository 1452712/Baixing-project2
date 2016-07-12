<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    public $uid = 'id'; 
    public $email = 'email';
    public $password = 'password';
    public $real_name = 'real_name';
    public $resume = 'resume';
}

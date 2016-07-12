<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPrivilege extends Model
{
    public $table = 'userPrivilege';
    public $primaryKey = 'puid';
    public $uid = 'uid';
    public $pid = 'pid';
    
}

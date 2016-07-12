<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public $table = 'submissions';
    public $timestamps = false;
    public $primaryKey = 'sid';
    public $uid = 'uid';
    public $pid = 'pid';
    public $lang = 'lang';
    public $code = 'code';
    
    
}

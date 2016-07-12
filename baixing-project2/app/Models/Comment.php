<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';
    public $cid = 'id';
    public $sid = 'sid';
    public $body = 'body';
    public $create_by = 'created_by';
    
}

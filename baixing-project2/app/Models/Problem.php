<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $tabel = 'problems';
    public $pid = 'id';
    public $tid = 'tid';
    public $content = 'content';
    public $visible = 'visible';
    public $created_by = 'created_by';
}

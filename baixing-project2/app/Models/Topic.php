<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public $table = 'topics';
    public $tid = 'id';
    public $name = 'name';
    public $description = 'description';
    public $created_by = 'created_by';
}

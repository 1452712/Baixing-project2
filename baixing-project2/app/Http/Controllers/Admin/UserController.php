<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }
}

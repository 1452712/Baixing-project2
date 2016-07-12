<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('gadmin');
    }

    public function index(){
        // return Auth::guard('admin')->user();
        return view('admin.dashboard');
    }
}

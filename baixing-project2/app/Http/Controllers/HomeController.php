<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        var_dump("dheiuw");
        //return view('home');
    }


    /**
     * @param Request $request
     */
    public function addSubmission(Request $request)
    {

    }

    /**
     * @param $id  -- problem id
     */
    public  function  showProblem($id)
    {

    }

    /**
     * @param $id --- topic id
     */
    public function showTopicProblems($id)
    {

    }
}

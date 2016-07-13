<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
    //routes here

    Route::get('/', function () {
        return view('welcome');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/topic/{id}','HomeController@showTopicProblems');
    Route::get('/problem/{id}','HomeController@showProblem');
    Route::post('/problem/{id}/submission','HomeController@addSubmission');
    Route::get('/info/{id}','HomeController@showResume');
    Route::post('/info/{id}/submission','HomeController@addResume');

});


Route::group(['middleware' => ['web']], function () {
    //routes here
    Route::get('/admin','AdminController@index');
    /*
    Route::get('/admin/login','Admin\AuthController@showLoginForm');
    Route::post('/admin/login','Admin\AuthController@adminLogin');
    Route::get('/admin/logout','Admin\AuthController@logout');
    */

    //url:   /admin/xxx</yyy>
    Route::group(['prefix' => 'admin'], function () {
        Route::get('login','Admin\AuthController@showLoginForm');
        Route::post('login','Admin\AuthController@adminLogin');
        Route::get('logout','Admin\AuthController@logout');

        // Registration Routes...
        Route::get('register', 'Admin\AuthController@getRegister');
        Route::post('register', 'Admin\AuthController@register');\

        Route::get('problem/{id}','Admin\ProblemController@showProblem');
        Route::get('topic','Admin\TopicController@showTopics');
        Route::get('topic/{id}','Admin\TopicController@showTopic');
        Route::get('topic/update/{id}','Admin\TopicController@edit');
        Route::get('user/{id}','Admin\UserController@showUser');
        Route::get('submission/{id}','Admin\SubmissionController@showSubmission');
        Route::get('submission','Admin\SubmissionController@showSubmissions');

        Route::post('add','Admin\AuthController@addAdmin');
        Route::post('topic','Admin\TopicController@create');
        Route::put('topic/{id}','Admin\TopicController@update');
        Route::post('problem','Admin\ProblemController@createProblem');
        Route::put('problem/{id}','Admin\ProblemController@update');
        Route::post('submission/{id}/comment','Admin\ProblemController@createComment');

    });
});


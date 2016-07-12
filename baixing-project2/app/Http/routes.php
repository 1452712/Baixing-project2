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

    Route::get('/home', 'HomeController@index');
});


Route::group(['middleware' => ['web']], function () {
    //routes here
    Route::get('/admin','AdminController@index');
    Route::get('/admin/login','Admin\AuthController@showLoginForm');
    Route::post('/admin/login','Admin\AuthController@adminLogin');
    Route::get('/admin/logout','Admin\AuthController@logout');

    // Registration Routes...
    Route::get('/admin/register', 'Admin\AuthController@getRegister');
    Route::post('/admin/register', 'Admin\AuthController@register');
});


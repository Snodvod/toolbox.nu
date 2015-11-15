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

Route::get('/', 'HomeController@index');
Route::resource('users', 'UserController');

Route::get('/tools', function(){

    return view('tools/index');

});

Route::resource('users.tools', 'ToolController');
Route::get('/tools', 'SearchController@index');

Route::get('user/{id}/profile/edit',[
	'middleware' => 'auth',
	'uses' => 'ProfileController@edit'
]);
Route::get('user/{id}/profile/contact',[
	'middleware' => 'auth',
	'uses' => 'ProfileController@contact'
]);

Route::get('user/{id}/profile', 'ProfileController@index');
Route::get('tools/{toolId}/detail', 'ToolController@detail');

Route::post('reservation/store', 'ReservationController@store');
Route::get('reservation/{id}/status/{status}/update', 'ReservationController@updateStatus');

Route::get('tools/{toolId}/detail/edit', 'ToolController@index');
Route::put('tools/{id}/update', 'ToolController@update');
Route::get('tools/add', 'ToolController@add');
Route::post('tools/create', 'ToolController@create');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

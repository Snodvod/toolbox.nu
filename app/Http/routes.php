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
Route::get('user/{id}/account', 'ProfileController@show');
Route::get('user/{id}/account/edit', 'ProfileController@edit');
Route::get('user/{id}/reservations', 'ProfileController@reservation');
Route::get('tools/{toolId}/detail', 'ToolController@detail');

Route::post('reservation/store', 'ReservationController@store');
Route::get('reservation/{id}/status/{status}/update', 'ReservationController@updateStatus');

Route::get('tools/{toolId}/edit', 'ToolController@index');
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

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

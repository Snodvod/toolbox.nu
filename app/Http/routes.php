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
Route::get('user/{id}/profile/edit',[
	'middleware' => 'auth',
	'uses' => 'ProfileController@edit'
]);
Route::get('user/{id}/profile/contact',[
	'middleware' => 'auth',
	'uses' => 'ProfileController@contact'
]);
Route::get('user/{id}/profile', 'ProfileController@index');

Route::get('tools/detail/{product}', function(){
   return view('tools/detail');
});

Route::get('user/{id}/managetools', 'ToolController@index');
    
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

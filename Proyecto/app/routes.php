<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('register', 'HomeController@register');
Route::resource('create', 'TaskController');//resourc = restful http
	


Route::get('logout', 'UserController@logout');


Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('auth', 'UserController@isLogged');

Route::group(array('before' => 'auth'), function () {
	Route::resource('task', 'TaskController');
	Route::resource('create', 'TaskController');//resourc = restful http
	
	Route::get('task/create', array('as' => 'create', 'uses' => 'TaskController@create'));
	Route::get('usuario','TaskController@cargarUsuario');
	Route::get('id','TaskController@getId');
	Route::get('store','TaskController@store');
	
	

	


});
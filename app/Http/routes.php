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

Route::get('/', 'WelcomeController@index');

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['uses' => 'Auth\AuthController@postLogin'])->before('csrf');;

Route::get('/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);

Route::get('/home',['as' => 'home', 'uses' =>  'HomeController@index'])->before('auth');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses'=>'\App\Http\Controllers\HomeController@getIndex',
	'as'=>'index.home',
	'middleware' => ['guest'],
	]);

Route::get('/seller', [
	'uses'=>'\App\Http\Controllers\HomeController@getSellerHome',
	'as'=>'seller.home',
	'middleware' => ['guest'],
	]);

Route::get('/search', [
	'uses'=>'\App\Http\Controllers\SearchController@getResults',
	'as'=>'index.search',
	'middleware' => ['guest'],
	]);

Route::get('/register', [
	'uses'=>'\App\Http\Controllers\AuthController@getRegister',
	'as'=>'Auth.register',
	'middleware' => ['guest'],
	]);

Route::post('/register', [
	'uses'=>'\App\Http\Controllers\AuthController@postRegister',
	'as'=>'Auth.register',
	'middleware' => ['guest'],
	]);

Route::get('/login', [
	'uses'=>'\App\Http\Controllers\AuthController@getLogin',
	'as'=>'Auth.login',
	'middleware' => ['guest'],
	]);

Route::post('/login', [
	'uses'=>'\App\Http\Controllers\AuthController@postLogin',
	'as'=>'Auth.login',
	'middleware' => ['guest'],
	]);

Route::get('/cart', [
	'uses'=>'\App\Http\Controllers\HomeController@getCart',
	'as'=>'index.cart',
	'middleware' => ['guest'],
	]);
Route::get('/home', [
	'uses'=>'\App\Http\Controllers\HomeController@getCart',
	'as'=>'homepage',
	'middleware' => ['Auth'],
	]);
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
Route::post('/signup', 'HomeController@do_signup');

Route::get('/session/user', 'SessionController@user');
Route::post('/session/signin', 'SessionController@do_signin');
Route::get('/session/signout', 'SessionController@do_signout');

Route::get('/api/cities', 'APIController@get_cities');
Route::get('/api/provinces', 'APIController@get_provinces');

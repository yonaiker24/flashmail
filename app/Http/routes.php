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


Route::get('/','FrontController@index');
Route::get('principal','FrontController@principal');

Route::resource('registro','RegistroController');



Route::post('principal','OrdenController@store');

Route::resource('login','LogController');


Route::get('logout','LogController@logout');




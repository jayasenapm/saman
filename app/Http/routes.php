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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','HomeControlooer@home');
Route::get('/rooms','HomeControlooer@rooms');
Route::get('/gallery','HomeControlooer@gallery');
Route::get('/contact','HomeControlooer@contact');
Route::get('/info','HomeControlooer@info');
Route::get('/cab','HomeControlooer@cab');
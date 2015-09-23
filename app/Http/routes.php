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

Route::get('/asdf', function () {
  return 'hello asdf';
});

Route::post('/api/login', 'UserController@postLogin');
Route::get('/api/accomplishments', 'AccomplishmentController@getIndex');
Route::post('/api/accomplishments', 'AccomplishmentController@postCreate');
Route::post('/api/accomplishments/{id}', 'AccomplishmentController@postType');
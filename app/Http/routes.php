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
Route::get('home', 'HomeController@index');

Route::group(['prefix'=>'/','namespace'=>'Admin'],function(){
    Route::resource('ballots','BallotsController');
    Route::resource('users','UsersController');
    Route::resource('users/{id}/delete','UsersController@showDelete');
    Route::get('pdf/{id}','BallotsController@getPDF');
    Route::get('infor/{id}','BallotsController@getInfor');

});

Route::controllers([
	'/' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

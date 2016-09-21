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
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'UserController@index')->name('login');
//    Route::get('/login', 'UserController@index')->name('login');
    Route::post('/', 'UserController@login');
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/adduser', 'UserController@create')->name('adduesrs');
    Route::post('/adduser', 'UserController@save')->name('saveuesrs');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home','HomeController@index')->name('home');
        Route::get('/myfiles','HomeController@files')->name('myfiles');
        Route::get('/Userdetails','HomeController@UserDetails')->name('userdetails');
        Route::delete('/users/{id}', 'HomeController@delete')->name('deleteUser');



    });


});
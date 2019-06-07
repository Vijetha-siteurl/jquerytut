<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {

    return view('welcome');
});


Route::get('/tabs', function () {

    return view('tabs');
});
Route::get('/employee', function () {
    return view('employee');
});

Route::get('/multitab', function () {
    return view('multitab');
});

Route::post('/register', 'User\UserController@register');

Route::get('/getuserdetails', 'User\UserController@getuserdetails');

Route::post('/delete', 'User\UserController@delete');

Route::post('/update', 'User\UserController@update');

Route::get('/getuserdetails', 'User\UserController@getuserdetails');

Route::post('/userdetails', 'User\UserController@userdetails');

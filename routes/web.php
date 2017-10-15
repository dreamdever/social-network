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

Auth::routes();

// PAGE
Route::get('/', 'PageController@index')->name('home');

// USER
Route::get('/profile', 'UserController@profile')->name('profile');

// HOMEPAGE
Route::get('penis', function() {
    return view('welcome');
});

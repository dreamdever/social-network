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
Route::get('/',  function () {
    return view('welcome');
})->name('welcome');
Route::get('/home', 'PageController@index')->name('home');
Route::get('/messages', 'PageController@messages')->name('messages');
Route::get('/friends', 'PageController@friends')->name('friends');
Route::get('/user/profile/{id}', 'PageController@profile');
Route::post('/search', 'PageController@searchPeople')->name('search');

// USER
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('/profile/update', 'UserController@profileUpdate')->name('profileUpdate');
Route::get('/friend/remove/{id}', 'UserController@friendRemove');
Route::get('/friend/add/{id}', 'UserController@friendAdd');
Route::post('/delete', 'UserController@delete')->name('delete');
Route::post('/logout', 'UserController@logout')->name('logout');
Route::post('/avatar', 'UserController@avatarChange')->name('avatarChange');


// POSTS CONTROLLER
Route::post('/post/create', 'PostController@create')->name('postCreate');
Route::get('/post/{id}/{like}', 'PostController@like');


//Messages
Route::get('/chat/{id}', 'MessageController@getMessages');
Route::post('/message/send', 'MessageController@send')->name('sendMessage');
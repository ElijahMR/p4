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

Route::get('/', 'GameController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/games', 'GameController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/games/{id}/add', 'GameController@add');
    Route::get('/games/{id}/remove', 'GameController@remove');
    Route::get('/games/create', 'GameController@create');
    Route::post('/games/create', 'GameController@store');
    Route::get('/friends', 'FriendController@index');
    Route::post('/friends', 'FriendController@add');
    Route::get('/friends/{id}/delete', 'FriendController@delete');
});

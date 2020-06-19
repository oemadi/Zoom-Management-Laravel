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
    return view('auth.login');
});

Route::get('/oauth', 'CallbackController@getOauth')->name('oauth');
Route::get('/callback', 'CallbackController@index')->name('call');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/create/meeting', 'CallbackController@createMeting')->name('meeting_create');
Route::post('/store/meeting', 'CallbackController@storeMeeting')->name('store_create');

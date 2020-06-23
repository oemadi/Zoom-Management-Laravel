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

// Route::get('HDTutoMail', function () {

//     $user = \App\Models\User::find(5);

//     Mail::to($user->email)->send(new \App\Mail\HDTutoMail($user));

//     dd("Email is Send.");

// });

Route::get('/', function () {

    if (Auth::check()) {
    return view('home');
    }else{
    return view('welcome');
    }
});

Route::get('/oauth', 'CallbackController@getOauth')->name('oauth');
Route::get('/callback', 'CallbackController@index')->name('call');
Route::get('/validasi/{id}', 'CekValidasiController@index')->name('valid');
// Route::get('/valid', 'CekValidasiController@ceklogin')->name('check_login');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index')->name('home');
Route::get('/create/meeting', 'CallbackController@createMeting')->name('meeting_create');
Route::any('/list/meeting', 'MeetingController@index')->name('meeting_list');
Route::post('/store/meeting', 'CallbackController@storeMeeting')->name('store_create');

Route::get('/delete/meeting/{id}', 'MeetingController@getDelete');

Route::get('/join/add', 'JoineventController@add')->name('join_add');
Route::post('/join/save', 'JoineventController@save')->name('join_save');
Route::any('/join/event', 'JoineventController@index')->name('join_event');
Route::get('/join/download', 'JoineventController@download')->name('join_report');
// Route::get('/join/download/{id}', 'JoineventController@download')->name('join_report');
Route::any('/list/user', 'UserController@index')->name('list_user');
Route::any('/user/check/{id}', 'UserController@checkvalidasi')->name('check_validasi');

Route::any('/list/sertifikat', 'SertifikatController@index')->name('list_sertifikat');
Route::any('/sertifikat/add', 'SertifikatController@add')->name('add_sertifikat');
Route::any('/sertifikat/store', 'SertifikatController@store')->name('store_sertifikat');
Route::get('/sertifikat/edit/{id}', 'SertifikatController@edit')->name('edit_sertifikat');
Route::put('/sertifikat/update/{id}', 'SertifikatController@update')->name('update_sertifikat');
Route::get('/delete/sertifikat/{id}', 'SertifikatController@destroy')->name('delete_sertifikat');


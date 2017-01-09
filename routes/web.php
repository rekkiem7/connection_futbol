<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','LoginController@index');

Route::get('maqueta', function () {
    return view('profile');
});
Route::get('submenu', function () {
    return view('submenu.submenu');
});

Auth::routes();

Route::post('/login','LoginController@logear');
Route::post('/registerUser','RegisterController@registerUser');
Route::get('/dashboard', 'DashboardController@index');
Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
Route::get('/logout','LoginController@logout');
Route::get('email',function(){
	return view('form_email');
});



Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );

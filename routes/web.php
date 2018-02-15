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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tokensale', 'TokensaleController@index')->name('token_sale');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('register/ref/{from_affiliate_id}', 'Auth\RegisterController@referredUser');

Route::get('/download/{language}', 'DownloadController@download');
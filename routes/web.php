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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/banner',  function () {
    return view('bannerPage');
});

Route::post('/subscribers', 'SubscribersController@store')->name('subscribersStore');

Route::post('/search-subscribers', 'SubscribersController@send')->name('subscribersSearch');


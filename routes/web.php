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
Route::get('/', 'HomeController@index')->name('index');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('create', 'HomeController@create')->name('create');
    Route::post('create', 'HomeController@store')->name('store');
    Route::get('edit/{id}', 'HomeController@edit')->name('edit');
    Route::post('edit/{id}', 'HomeController@update')->name('update');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/api', 'HomeController@json')->name('api');
});


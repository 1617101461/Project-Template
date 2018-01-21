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

Route::get('paragraf','TestController@paragraf');
Route::get('costum1','TestController@costum1');
Route::get('costum2','TestController@costum2');
Route::get('galeri','TestController@galeri');
Route::get('database','TestController@database');
Route::get('table', 'TestController@table');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

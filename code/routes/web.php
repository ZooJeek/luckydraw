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

Route::get('/', "IndexController@Index");
Route::get('/doc', "IndexController@doc");

Route::get('/luckydraw','LuckyDrawController@show');
Route::post('/luckydraw','LuckyDrawController@draw');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

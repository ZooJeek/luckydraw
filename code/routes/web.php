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

Route::get('/', "IndexController@Index")->name('index');
Route::get('/login', "IndexController@login")->name('login');
Route::get('logout', "IndexController@logout")->name('logout');
Route::get('/regis', "IndexController@regis");
Route::get('/activity', "IndexController@activity")->name('activity');
Route::get('/draw', "IndexController@draw");


Route::post('/login', "IndexController@loginHandle");
Route::post('/regis', "IndexController@regisHandle");

Route::get('/doc', "IndexController@doc");

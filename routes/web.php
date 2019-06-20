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

Route::resource('/users','UserController')->middleware('auth');
Route::resource('/floors','FloorController')->middleware('auth');
Route::resource('/rooms','RoomController')->middleware('auth');
Route::resource('/bookings','BookingController')->middleware('auth');

Route::get('/floor/{id}/rooms','FloorController@show');
Route::get('/home/search','HomeController@search')->name('home-search');

Route::get('/bookings/create', 'BookingController@create');
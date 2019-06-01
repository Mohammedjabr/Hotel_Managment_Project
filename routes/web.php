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

Route::group(['prefix' => 'hotel'],function (){
    Route::get('/',['as' => 'hotel.index', 'uses' => 'HotelController@index']);
    Route::get('/create',['as' => 'hotel.create', 'uses' => 'HotelController@create']);
    Route::post('/store',['as' => 'hotel.store', 'uses' => 'HotelController@store']);
     Route::get('/reservation',['as' => 'hotel.reservation', 'uses' => 'ReservationController@index']);
     Route::get('/rooms',['as' => 'rooms.index', 'uses' => 'RoomController@index']);
     Route::get('/contact',['as' => 'contact.index', 'uses' => 'ContactController@index']);
     Route::get('/login',['as' => 'login.index', 'uses' => 'LoginController@index']);
     
    });

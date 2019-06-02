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

Route::group(['prefix' => 'hotel'], function () {
    Route::get('/', ['as' => 'hotel.index', 'uses' => 'HotelController@index']);
    Route::get('/reservation', ['as' => 'hotel.reservation', 'uses' => 'ReservationController@index']);
    Route::get('/rooms', ['as' => 'rooms.index', 'uses' => 'RoomController@index']);
    Route::get('/contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
    Route::get('/login', ['as' => 'login.index', 'uses' => 'LoginController@index']);

});

Route::group(['prefix' => 'control'], function () {
    Route::group(['prefix' => 'hotel'], function () {
        Route::get('/create', ['as' => 'hotel.create', 'uses' => 'HotelController@create']);
        Route::post('/store', ['as' => 'hotel.store', 'uses' => 'HotelController@store']);
        Route::get('/edit/{id?}', ['as' => 'hotel.edit', 'uses' => 'HotelController@edit']);
        Route::put('/update', ['as' => 'hotel.update', 'uses' => 'HotelController@update']);
    });
    Route::group(['prefix' => 'room'], function () {
        Route::get('/create', ['as' => 'room.create', 'uses' => 'RoomController@create']);
        Route::post('/store', ['as' => 'room.store', 'uses' => 'RoomController@store']);
        Route::get('/edit', ['as' => 'room.edit', 'uses' => 'RoomController@edit']);
        Route::put('/update', ['as' => 'room.update', 'uses' => 'RoomController@update']);
        Route::get('/delete', ['as' => 'room.delete', 'uses' => 'RoomController@edit']);
    });
    Route::group(['prefix' => 'reservation'], function () {
        Route::get('/create', ['as' => 'reservation.create', 'uses' => 'ReservationController@create']);
        Route::post('/store', ['as' => 'reservation.store', 'uses' => 'ReservationController@store']);
        Route::get('/edit', ['as' => 'reservation.edit', 'uses' => 'ReservationController@edit']);
        Route::put('/update', ['as' => 'reservation.update', 'uses' => 'ReservationController@update']);
        Route::get('/delete', ['as' => 'reservation.delete', 'uses' => 'ReservationController@edit']);
    });
});

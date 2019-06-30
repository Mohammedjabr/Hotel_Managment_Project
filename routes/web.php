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
Route::get('/', ['as' => 'hotel.index', 'uses' => 'HotelController@index']);

Route::group(['prefix' => 'hotel'], function () {
    Route::get('/', ['as' => 'hotel.index', 'uses' => 'HotelController@index']);
    Route::get('room', ['as' => 'hotel.room', 'uses' => 'HotelController@room']);
    Route::get('reservation', ['as' => 'hotel.reservation', 'uses' => 'HotelController@reservation']);
    Route::get('contact', ['as' => 'hotel.contact', 'uses' => 'HotelController@contact']);
});

// Route::get('login', ['as' => 'login.index', 'uses' => 'LoginController@index']);
// Route::post('/login/checklogin', ['as' => 'login.check', 'uses' => 'LoginController@cheack']);
// Route::get('/login/sucesslogin', ['as' => 'login.success', 'uses' => 'LoginController@successlogin']);
// Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);


//,'middleware'=>['auth:employee']
Route::group(['prefix' => 'employee'], function () {
    Route::get('/create', ['as' => 'employee.create', 'uses' => 'EmployeeController@create']);
    Route::post('/store', ['as' => 'employee.store', 'uses' => 'EmployeeController@store']);
    Route::get('/show', ['as' => 'employee.show', 'uses' => 'EmployeeController@show']);
    Route::get('/edit/{id}', ['as' => 'employee.edit', 'uses' => 'EmployeeController@edit']);
    Route::put('/update/{id}', ['as' => 'employee.update', 'uses' => 'EmployeeController@update']);
    Route::delete('/delete/{id}', ['as' => 'employee.delete', 'uses' => 'EmployeeController@destroy']);


    //login Route
    Route::get('login', 'AdminController@index');
    Route::post('login', 'AdminController@store')->name('admin.login');
});

Route::group(['prefix' => 'room'], function () {
    Route::get('/', ['as' => 'room.index', 'uses' => 'RoomController@index']);
    Route::get('create', ['as' => 'room.create', 'uses' => 'RoomController@create']);
    Route::post('store', ['as' => 'room.store', 'uses' => 'RoomController@store']);
    Route::get('show', ['as' => 'room.show', 'uses' => 'RoomController@show']);
    Route::get('edit/{id?}', ['as' => 'room.edit', 'uses' => 'RoomController@edit']);
    Route::put('update/{id?}', ['as' => 'room.update', 'uses' => 'RoomController@update']);
    Route::get('delete/{id?}', ['as' => 'room.destroy', 'uses' => 'RoomController@destroy']);
});
Route::group(['prefix' => 'reservation'], function () {
    Route::get('/', ['as' => 'reservation.index', 'uses' => 'ReservationController@index']);
    Route::get('create', ['as' => 'reservation.create', 'uses' => 'ReservationController@create']);
    Route::post('store', ['as' => 'reservation.store', 'uses' => 'ReservationController@store']);
    Route::get('edit/{id?}', ['as' => 'reservation.edit', 'uses' => 'ReservationController@edit']);
    Route::put('update/{id?}', ['as' => 'reservation.update', 'uses' => 'ReservationController@update']);
    Route::get('delete/{id?}', ['as' => 'reservation.destroy', 'uses' => 'ReservationController@destroy']);
    Route::get('show', ['as' => 'reservation.show', 'uses' => 'ReservationController@show']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

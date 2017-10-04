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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/findcar', 'CarController@index');
Route::get('/payment', 'PaymentController@index');
Route::post('/payment', 'PaymentController@store');
Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@store');
Route::post('/findcar/booking', 'BookingController@book');
Route::get('/triphistory', 'TripHistoryController@index');
Route::post('/confirmbooking', 'BookingController@confirm');
Route::post('/triphistory', 'TripHistoryController@setBookingCompleted');

Route::post('/set', 'CarController@set');

Route::get('/findcar/booking', 'BookingController@get')->name('get');

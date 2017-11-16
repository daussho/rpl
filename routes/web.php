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

Route::post('/gajipokok/create',['as'=> 'form_url','uses'=>'GajiPokokBulananController@store']);

Route::get('/gajipokok/create','GajiPokokBulananController@create');

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/status', function () {
    return view('status');
});

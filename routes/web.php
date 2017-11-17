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

Route::get('/gajipokok','GajiPokokBulananController@index');

Route::post('/gajipokok/create',['as'=> 'form_url','uses'=>'GajiPokokBulananController@store']);

Route::get('/gajipokok/create','GajiPokokBulananController@create');

Route::get('/gajipokok/edit/{id}','GajiPokokBulananController@edit');

Route::post('/gajipokok/edit','GajiPokokBulananController@update');

Route::get('/gajipokok/delete/{id}','GajiPokokBulananController@destroy');

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('home');
});

Route::get('/status', function () {
    return view('status');
});

Route::post('/login', ['as'=> 'form_url','uses'=>'AccountController@check']);

Route::get('/admin/add', function () {
    return view('/admin/AddAccount');
});


?>


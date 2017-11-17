<?php
session_start();
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

//Ini controller gaji lembur

Route::get('/gajilembur','GajiLemburController@index');

Route::post('/gajilembur/create',['as'=> 'form_url','uses'=>'GajiLemburController@store']);

Route::get('/gajilembur/create','GajiLemburController@create');

Route::get('/gajilembur/edit/{id}','GajiLemburController@edit');

Route::post('/gajilembur/edit','GajiLemburController@update');

Route::get('/gajilembur/delete/{id}','GajiLemburController@destroy');



Route::get('/tes', function () {
    return view('tes');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    if(empty($_SESSION['login_user'])){
    	return redirect('login');
    } else {
    	return view('home');
    }
    
});

Route::get('/status', function () {
    return view('status');
});

Route::post('/login', ['as'=> 'form_url','uses'=>'AccountController@check']);

Route::get('/admin/add', function () {
    if(empty($_SESSION['login_user'])){
    	return redirect('login');
    } else {
    	if($_SESSION['tipe']==1){
    		return view('/admin/AddAccount');
    	} else {
    		return redirect('/');
    	}
    }
});

Route::post('/admin/add', ['as'=> 'form_url','uses'=>'AccountController@register']);

Route::get('/admin/delete', function () {
    if(empty($_SESSION['login_user'])){
    	return redirect('login');
    } else {
    	if($_SESSION['tipe']==1){
    		return view('/admin/DeleteAccount');
    	} else {
    		return redirect('/');
    	}
    }
});

Route::post('/admin/delete', ['as'=> 'form_url','uses'=>'AccountController@register']);

Route::get('/logout', function(){
	Session::flush();
	return redirect('/login');
});

?>


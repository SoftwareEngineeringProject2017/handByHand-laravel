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

Route::get('/test','test@index');

Route::post('/testGet','test@totestpage2');

Route::get('/testlogin',function(){
    $localAddress='http://localhost/blog3/resources/views/helping_hand_system_html/';
    return view('helping_hand_system_html/login',['localAddress'=>$localAddress]);
});

Route::get('/testregister',function(){
    $localAddress='http://localhost/blog3/resources/views/helping_hand_system_html/';
    return view('helping_hand_system_html/register',['localAddress'=>$localAddress]);
});

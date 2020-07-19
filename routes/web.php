<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','SessionsController@create');

Route::get('/login','AuthController@authenticate');

Route::get('/logout','SessionsController@destory');

Route::get('/home','PunaController@index');

Route::get('/statistika', function () {
    return view('statistika.index');
});

Route::get('/tables', function () {
    return view('asd.tables');
});


Route::get('/punet','PunaController@index');



Route::get('/njoftime','NjoftimeController@index');





Route::resource('/automjetet', 'AutomjetiController');
Route::post('/automjetet/trash{automjetet}','AutomjetiController@trash')->name('automjetet.trash');




Route::resource('/karburanti', 'KarburantiController');

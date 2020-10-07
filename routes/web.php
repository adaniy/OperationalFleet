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

Route::get('/',function(){ return view('home'); });


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->middleware('verified')->group(function() {


    Route::resource('/punet', 'PunaController');
    Route::post('/punet/{id}', 'PunaController@updateProgres')->name('punet.updateprogres');


    Route::resource('/njoftime', 'NjoftimeController');

    Route::resource('/servisi', 'ServisiController');


    Route::resource('/pjese', 'PjeseController');


    Route::resource('/personeli', 'PersoneliController');


    Route::resource('/automjetet', 'AutomjetiController');
    Route::post('/automjetet/trash{automjetet}', 'AutomjetiController@trash')->name('automjetet.trash');


    Route::resource('/karburanti', 'KarburantiController');

    Route::get('/statistika', 'StatistikaController@index')->middleware('auth');


//    Route::get('/home/authorized-clients', 'HomeController@getAuthorizedClients')->name('authorized-clients');
//    Route::get('/home/my-clients', 'HomeController@getClients')->name('personal-clients');
//    Route::get('/home/my-tokens', 'HomeController@getTokens')->name('personal-tokens');
//    Route::get('/home', 'HomeController@index');

});


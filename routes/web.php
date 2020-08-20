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

Route::get('/',function(){
    return view('home');
})->middleware('auth');

Route::get('/home', 'KarburantiController@index');




// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



// Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');





Route::get('/statistika', 'StatistikaController@index');



Route::resource('/punet','PunaController')->middleware('auth');
Route::post('/punet/{id}','PunaController@updateProgres')->name('punet.updateprogres')->middleware('auth');



Route::resource('/njoftime','NjoftimeController')->middleware('auth');




Route::resource('/servisi','ServisiController')->middleware('auth');




Route::resource('/pjese','PjeseController')->middleware('auth');





Route::resource('/personeli','PersoneliController')->middleware('auth');








Route::resource('/automjetet', 'AutomjetiController')->middleware('auth');
Route::post('/automjetet/trash{automjetet}','AutomjetiController@trash')->name('automjetet.trash')->middleware('auth');





Route::resource('/karburanti', 'KarburantiController')->middleware('auth');


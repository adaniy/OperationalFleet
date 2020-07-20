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

Route::get('/home', 'KarburantiController@index')->name('home')->middleware('auth');




// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');





Route::get('/statistika', function () {
    return view('statistika.index');
})->middleware('auth');

Route::get('/tables', function () {
    return view('asd.tables');
});


Route::get('/punet','PunaController@index')->middleware('auth');



Route::get('/njoftime','NjoftimeController@index')->middleware('auth');





Route::resource('/automjetet', 'AutomjetiController')->middleware('auth');
Route::post('/automjetet/trash{automjetet}','AutomjetiController@trash')->name('automjetet.trash')->middleware('auth');




Route::resource('/karburanti', 'KarburantiController')->middleware('auth');


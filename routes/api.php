<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:web')->middleware('verified')->group(function() {

    //api routes for automjeti page
    Route::get('/automjeti', 'AutomjetiAPIController@index')->name('automjeti.index');
    Route::get('/automjeti/{id}', 'AutomjetiAPIController@show')->name('automjeti.show');
    Route::post('/automjeti', 'AutomjetiAPIController@store')->name('automjeti.store');
    Route::post('/automjeti/{id}', 'AutomjetiAPIController@update')->name('automjeti.update');
    Route::delete('/automjeti/{id}', 'AutomjetiAPIController@destroy')->name('automjeti.destroy');


//api routes for karburanti page
    Route::get('/karburant', 'KarburantiApiController@index')->name('karburant.index');
    Route::get('/karburant/{id}', 'KarburantiApiController@show')->name('karburant.show');
    Route::post('/karburant', 'KarburantiApiController@store')->name('karburant.store');
    Route::post('/karburant/{id}', 'KarburantiApiController@update')->name('karburant.update');
    Route::delete('/karburant/{id}', 'KarburantiApiController@destroy')->name('karburant.destroy');




//api Routes for statistika page
    Route::get('/statistika/gjitheseje', 'StatistikaController@shumaGjithesej');
    Route::get('/statistika/javore', 'StatistikaController@shpenzimeJavore');
    Route::get('/statistika/mujore', 'StatistikaController@shpenzimeMujore');
    Route::get('/statistika/punet/numri', 'StatistikaController@numriPuneve');
    Route::get('/statistika/punet/avg', 'StatistikaController@punetJavore');

    //api routes for user registration
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');

//api oauth routes
    Route::post('oauth/token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

});











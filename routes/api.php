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

Route::middleware('auth:web')->get('/user', function (Request $request) {
    return $request->user();
});


//api routes for user registration
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



//api routes for automjeti page
Route::get('/automjeti', 'AutomjetiAPIController@index')->name('automjeti.index')
        // ->middleware('auth:web')
        ;
Route::get('/automjeti/{id}', 'AutomjetiAPIController@show')->name('automjeti.show')
        // ->middleware('auth:web')
        ;
Route::post('/automjeti', 'AutomjetiAPIController@store')->name('automjeti.store')
        // ->middleware('auth:web')
        ;
Route::post('/automjeti/{id}', 'AutomjetiAPIController@update')->name('automjeti.update')
        // ->middleware('auth:web')
        ;
Route::delete('/automjeti/{id}', 'AutomjetiAPIController@destroy')->name('automjeti.destroy')
        // ->middleware('auth:web')
        ;




//api Routes for statistika page
Route::get('/statistika/gjitheseje', 'StatistikaController@shumaGjithesej')
        // ->middleware('auth:web')
        ;
Route::get('/statistika/javore', 'StatistikaController@shpenzimeJavore')
        // ->middleware('auth:web')
;
Route::get('/statistika/mujore', 'StatistikaController@shpenzimeMujore')
        // ->middleware('auth:web')
;
Route::get('/statistika/punet/numri', 'StatistikaController@numriPuneve')
        // ->middleware('auth:web')
;
Route::get('/statistika/punet/avg', 'StatistikaController@punetJavore')
        // ->middleware('auth:web')
;

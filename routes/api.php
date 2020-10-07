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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//api routes for user registration
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');



//api routes for automjeti page
Route::get('/automjeti', 'AutomjetiAPIController@index')->name('automjeti.index')
//         ->middleware('api')
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


//api routes for karburanti page
Route::get('/karburant', 'KarburantiApiController@index')->name('karburant.index')
    // ->middleware('auth:web')
        ;
Route::get('/karburant/{id}', 'KarburantiApiController@show')->name('karburant.show')
    // ->middleware('auth:web')
        ;
Route::post('/karburant', 'KarburantiApiController@store')->name('karburant.store')
    // ->middleware('auth:web')
        ;
Route::post('/karburant/{id}', 'KarburantiApiController@update')->name('karburant.update')
    // ->middleware('auth:web')
        ;
Route::delete('/karburant/{id}', 'KarburantiApiController@destroy')->name('karburant.destroy')
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



//api oauth routes
Route::post('oauth/token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

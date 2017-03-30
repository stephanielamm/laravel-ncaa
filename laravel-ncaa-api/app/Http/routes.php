<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
// Games Routes
Route::get('/games', 'GameController@index');
Route::post('/games', 'GameController@create');
Route::get('/games/{id}', 'GameController@show');
Route::put('/games/{id}', 'GameController@update');
Route::delete('/games/{id}', 'GameController@destroy');


// 4 routes we will use in this project
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::delte($uri, $callback);

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

Route::get('/', function () {
  // documentation goes here
});

Route::get('games', function () {
  $myArray = [
    [
      'home' => 'UNC',
      'away' => 'Arkansas',
      'ptsHome' => 72,
      'ptsAway' => 65
    ],
    [
      'home' => 'Duke',
      'away' => 'South Carolina',
      'ptsHome' => 81,
      'ptsAway' => 89
    ]
  ];
    return Response::json($myArray);
});

Route::get('/games/{id}', function($id) {
  return $id;
});

Route::post('/games', function(Request $request) {
  // DB::table('games')->insert(); query builder, but we will use eloquent ORM
  return Response::json($request->all());
});

// 4 routes we will use in this project
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::delte($uri, $callback);

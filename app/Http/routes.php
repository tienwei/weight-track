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
use App\User;



$app->get('/', function () use ($app) {
//    return $app->welcome();
  return view('test');
});

// Users APIs
$app->get('api/users', function () use ($app) {
  $users =  User::all();
  return $users;
});

// Sessions APIs
$app->get('api/sessions', 'App\Http\Controllers\SessionController@index');
$app->post('api/sessions', 'App\Http\Controllers\SessionController@saveSession');
$app->get('api/sessions/{id}', 'App\Http\Controllers\SessionController@getSession');
$app->put('api/sessions/{id}', 'App\Http\Controllers\SessionController@updateSession');
$app->delete('api/sessions/{id}', 'App\Http\Controllers\SessionController@deleteSession');

// Measures APIs
$app->get('api/sessions/{id}/measures', 'App\Http\Controllers\MeasureController@index');
$app->post('api/sessions/{id}/measures', 'App\Http\Controllers\MeasureController@saveMeasure');
$app->get('api/sessions/{id}/measures/{id}', 'App\Http\Controllers\MeasureController@getMeasure');
$app->put('api/sessions/{id}/measures/{id}', 'App\Http\Controllers\MeasureController@updateMeasure');
$app->delete('api/sessions/{id}/measures/{id}', 'App\Http\Controllers\MeasureController@deleteMeasure');

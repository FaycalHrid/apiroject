<?php

use Illuminate\Http\Request;

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


// get list of tasks
Route::get('tasks','TaskController@index');
// get specific task
Route::get('tasks/{id}','TaskController@show');
// delete a task
Route::delete('tasks/{id}','TaskController@destroy');
// update existing task
Route::put('tasks','TaskController@store');
// create new task
Route::post('tasks','TaskController@store');

// get list of users
Route::get('users','UserController@index');
// get specific User
Route::get('users/{id}','UserController@show');
// delete a User
Route::delete('users/{id}','UserController@destroy');
// update existing User
Route::put('users','UserController@store');
// create new User
Route::post('users','UserController@store');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

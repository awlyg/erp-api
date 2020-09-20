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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('tasks', 'TaskController')->middleware('auth:api');
Route::resource('tasks', 'TaskController');

Route::post('login', 'Api\AuthController@login');

Route::get('login', function () {
    return response()->json(['message' => 'Unauthenticated 401.'], 401);
})->name('login');

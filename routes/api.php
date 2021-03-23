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
//Route::get('index','API_ApplicationController@index');
Route::get('list/{id}','API\ApplicationController@app_list');
Route::get('notification/{id}','API\ApplicationController@push_notification');
Route::post('appSession/create','API\AppSessionController@create');
Route::put('appSession/create_update/{id}','API\AppSessionController@create_update');
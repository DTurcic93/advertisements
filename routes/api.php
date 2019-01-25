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

Route::get('/ads','AdvertController@getAll');
Route::get('/ads/{id}','AdvertController@getDetails');
Route::post('/ads/insert','AdvertController@insert');
Route::get('/ads/update','AdvertController@update');
Route::get('/ads/delete/{id}','AdvertController@delete');

<?php

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

Route::post("/token/create", 'AuthController@login')->name('create_token');

//All secure URL's
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get("/contacts", 'ContactsController@list')->name('view_contacts');
});

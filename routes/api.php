<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where we can register API routes for our application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. 
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

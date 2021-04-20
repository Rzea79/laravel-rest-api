<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/reset','ResetController@reset');
Route::post('/event','EventController@store');

Route::get('/balance', 'BalanceController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

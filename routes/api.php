<?php

use App\Http\Controllers\Api\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::prefix('public')->group(function () {
        Route::post('getPhoneNumber', [AuthenticationController::class, 'getPhoneNumber']);
    });
});


// Route::prefix('v1')->group(function () {
//     Route::prefix('auth')->group(function () {
//         Route::post('dashboard', 'AuthController@dashboard'); // api/v1/auth/dashboard
//     })->middleware('auth:sanctum'); // private 

//     Route::prefix('public')->group(function () {
//         Route::post('getPhoneNumber', 'AuthController@getPhoneNumber'); // send opt to number
//         Route::post('verifyPhoneNumber', 'AuthController@verifyPhoneNumber'); // verify phone (exist or not) and otp verified or not
//         // is registered
//         Route::post('checkPin', 'AuthController@checkPin'); // check pin
//         // is not registered
//         Route::post('register', 'AuthController@register'); // set pin and register (step 1 & 2)
//     }); // public
// });

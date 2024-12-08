<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coming');
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/create/{name}/{phone}/{pin}', [UserController::class, 'create']);
    Route::get('/update/{name}/{phone}/{pin}/{id}', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
});
Route::get('/bappy',function(){return view('bappy');});
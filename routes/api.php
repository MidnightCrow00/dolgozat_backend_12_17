<?php

use App\Http\Controllers\SzakdogakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/szakdogak',[SzakdogakController::class, 'index']);
Route::post('/szakdogak',[SzakdogakController::class, 'store']);
Route::delete('/szakdogak/{id}',[SzakdogakController::class, 'destroy']);
Route::put('/szakdogak/{id}',[SzakdogakController::class, 'put']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

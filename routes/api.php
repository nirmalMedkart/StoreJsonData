<?php

use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DataController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// pages
Route::get('/page', [DataController::class,'get']);
Route::post('/page/store', [DataController::class,'insert']);
Route::put('/page/update/{id}', [DataController::class,'edit']);
Route::delete('/page/delete/{id}', [DataController::class,'delete']);

// components
Route::get('/components', [ComponentsController::class,'get']);
Route::post('/components/store', [ComponentsController::class,'insert']);
Route::put('/components/update/{id}', [ComponentsController::class,'edit']);
Route::delete('/components/delete/{id}', [ComponentsController::class,'delete']);

//
Route::get('/config', [ConfigController::class,'get']);
Route::post('/config/store', [ConfigController::class,'insert']);
Route::put('/config/update/{id}', [ConfigController::class,'edit']);
Route::delete('/config/delete/{id}', [ConfigController::class,'delete']);
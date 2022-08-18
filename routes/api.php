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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function(){
    Route::post('/register', [\App\Http\Controllers\User\AuthController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\User\AuthController::class, 'login']);
    Route::get('/loginschema', [\App\Http\Controllers\User\AuthController::class, 'getLoginFormConfig']);
});

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/test', function(){return response()->json(['message' => 'hi']);});  // Test
    Route::post('/logout', [\App\Http\Controllers\User\AuthController::class, 'logout']);
});



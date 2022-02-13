<?php

use App\Http\Controllers\UserController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//User Apis
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/', [UserController::class, 'index']);
Route::post('/users/', [UserController::class, 'store']);
Route::post('/users/', [UserController::class, 'update']);
Route::delete('/users/', [UserController::class, 'destroy']);

//Service Apis
Route::get('/service/{id}', [UserController::class, 'show']);
Route::get('/service/', [UserController::class, 'index']);
Route::post('/service/', [UserController::class, 'store']);
Route::post('/service/', [UserController::class, 'update']);
Route::delete('/service/', [UserController::class, 'destroy']);


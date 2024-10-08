<?php

use App\Http\Controllers\Api\V1\Auth\AccessTokensController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Auth Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('register', [AccessTokensController::class, 'register']);

Route::post('login', [AccessTokensController::class, 'login']);

Route::post('logout', [AccessTokensController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::post('forgot-password', [AccessTokensController::class, 'forgotPassword']);

Route::post('reset-password', [AccessTokensController::class, 'resetPassword']);

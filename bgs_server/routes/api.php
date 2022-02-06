<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\RankController;

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

Route::get('/online', [UserController::class, 'getAllOnlineUsers']);
Route::get('/matches', [MatchController::class, 'getAllCurentMatches']);
Route::get('/ranks', [RankController::class, 'getRank']);
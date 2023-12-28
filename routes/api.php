<?php

use App\Http\Controllers\Api\CastMemberApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\GenreApiController;
use App\Http\Controllers\Api\VideoApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/videos', [VideoApiController::class, 'index']);
Route::get('/videos/{video}', [VideoApiController::class, 'show']);


Route::get('/categories', [CategoryApiController::class, 'index']);
Route::get('/categories/{category}', [CategoryApiController::class, 'show']);

Route::get('/genres', [GenreApiController::class, 'index']);
Route::get('/genres/{genre}', [GenreApiController::class, 'show']);

Route::get('/cast_members', [CastMemberApiController::class, 'index']);
Route::get('/cast_members/{genre}', [CastMemberApiController::class, 'show']);

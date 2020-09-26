<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\LoginController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// dd('api.php');
Route::post('login', [LoginController::class, 'login']);
Route::get('post', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);

// dd('end of api.php');

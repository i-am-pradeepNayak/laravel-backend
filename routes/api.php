<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\addpostController;
use App\Http\Controllers\AddPostController as ControllersAddPostController;
use App\Models\addpost;

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

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('showUserName/{id}', [UserController::class, 'showUserName']);

Route::get("addjobs", [AddPostController::class, 'index']);
Route::post("addjob/{id}", [AddPostController::class, 'store']);
Route::get("getjob/{id}", [AddPostController::class, 'show']);
Route::get("getjob/showpost/{id}", [AddPostController::class, 'showpost']);

Route::put("modify/{id}", [AddPostController::class, 'update']);
Route::delete('remove/{id}', [AddPostController::class, 'destroy']);
Route::get('viewjob/{id}', [AddPostController::class, 'viewjob']);

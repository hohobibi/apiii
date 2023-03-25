<?php

use App\Http\Controllers\HomeController;
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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get("/posts",[HomeController::class,'posts']); // http://127.0.0.1:8000/api/posts
Route::get("/post/{post_id}",[HomeController::class,'post']); // http://127.0.0.1:8000/api/post/1

Route::get("/users",[HomeController::class,'users']); // http://127.0.0.1:8000/api/users
Route::get("/user/{user_id}",[HomeController::class,'user']); // http://127.0.0.1:8000/api/user/1

Route::get("/comments",[HomeController::class,'comments']); // http://127.0.0.1:8000/api/comments
Route::get("/comment/{comment_id}",[HomeController::class,'comment']); // http://127.0.0.1:8000/api/comment/1
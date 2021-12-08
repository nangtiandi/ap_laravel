<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    return "hello world";
});
Route::resource('posts',PostController::class)->middleware(['auth:sanctum', 'verified']);

// Route::get('logout',[AuthController::class,'logout']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/posts', [PostController::class,'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/posts', [PostController::class,'index'])->name('dashboard');

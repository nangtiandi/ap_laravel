<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Test;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\CategoryController;
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
//Route::get('/',function () {
//   $container = new Container;
//   $container->bind('test',function () {
//      return new Test();
//   });
//   $test = $container->resolve('test');
//   dd($test->smth());
//});
Route::get('/',function () {
    return view('welcome');
});

//Route::get('/',[HomeController::class,'index']);

Route::resource('category',CategoryController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

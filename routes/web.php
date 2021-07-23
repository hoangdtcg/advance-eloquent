<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('category')->group(function (){
    Route::get('/{id}',[CategoryController::class,'showAllPost']);
});
Route::prefix('post')->group(function (){
    Route::get('/{id}/category',[PostController::class,'getCategoryName']);
});

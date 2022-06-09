<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MyController;
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

Route::get('/productsearch/{key}',[MyController::class, 'productsearchajax']); 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/product/{id}',[MyController::class, 'show']);
Route::resource('comments', CommentController::class);
Route::post('/product/like', [MyController::class, 'like'])->name('products.like');

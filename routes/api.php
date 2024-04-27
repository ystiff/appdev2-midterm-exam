<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::apiResource('products', ProductController::class);

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("get", function () {
    return "welcom";
});



Route::post('/api/upload/local', [ProductController::class, 'uploadImageLocal']);
Route::post('/api/upload/public', [ProductController::class, 'uploadImagePublic']);

Route::middleware('extract.token')->group(function(){
   
    Route::POST('/test', function(){
        return 'HTTP Request: Post';
    });
    Route::PUT('/test', function(){
        return 'HTTP Request: Put';
    });
    Route::PATCH('/test', function(){
        return 'HTTP Request: Patch';
    });
    Route::DELETE('/test', function(){
        return 'HTTP Request: Delete';
    });



});
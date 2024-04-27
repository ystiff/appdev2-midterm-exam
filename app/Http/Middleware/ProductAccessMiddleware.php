<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenCheckerMiddleware
{
    Route::get('/get', function () {
        return response()->json(['message' => 'GET request handled.']);
    })->middleware(TokenCheckerMiddleware::class);
    
    // POST route
    Route::post('/post', function () {
        return response()->json(['message' => 'POST request handled.']);
    })->middleware(TokenCheckerMiddleware::class);
    
    // PUT route
    Route::put('/put', function () {
        return response()->json(['message' => 'PUT request handled.']);
    })->middleware(TokenCheckerMiddleware::class);
    
    // PATCH route
    Route::patch('/patch', function () {
        return response()->json(['message' => 'PATCH request handled.']);
    })->middleware(TokenCheckerMiddleware::class);
    
    // DELETE route
    Route::delete('/delete', function () {
        return response()->json(['message' => 'DELETE request handled.']);
    })->middleware(TokenCheckerMiddleware::class);

    
}

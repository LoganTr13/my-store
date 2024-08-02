<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
    return csrf_token();
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::post('/products', [ProductController::class, 'store']);

Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::put('/products/{id}', [ProductController::class, 'update']);

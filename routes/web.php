<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
    return csrf_token();
});

Route::get('/store', function(){
    return view('products.store');
});
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

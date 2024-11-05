<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/token', function () {
    return csrf_token();
});

Route::get('/store', function(){
    return view('products.store');
});

Route::get('/delete/{id}', function($id){

    $productController = new ProductController();

    $product = $productController->show($id)->getOriginalContent();

    return view('products.delete', ['product' => $product]);

});

Route::get('/update/{id}', function($id){

    $productController = new ProductController();

    $product = $productController->show($id)->getOriginalContent();

    return view('products.update', ['product' => $product]);
    
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/carts/{id}', [CartController::class, 'show'])->name('carts.show');

Route::get('/users', [UserController::class], 'index')->name('users.index');

Route::get('/users', [UserController::class], 'store')->name('users.store');

Route::post('/carts', [CartController::class], 'store')->name('carts.store');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::delete('/carts/{id}/{productId}', [CartController::class])->name('carts.delete');

Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');



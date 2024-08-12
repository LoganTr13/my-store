<?php

use App\Http\Controllers\ProductController;
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

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
